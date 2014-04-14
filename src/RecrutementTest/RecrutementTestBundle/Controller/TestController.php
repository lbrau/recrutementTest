<?php

namespace RecrutementTest\RecrutementTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RecrutementTest\RecrutementTestBundle\Form\TestType;
use RecrutementTest\RecrutementTestBundle\Entity\Test;
use RecrutementTest\RecrutementTestBundle\Entity\Question;
use RecrutementTest\RecrutementTestBundle\Entity\QuestionRepository;
use RecrutementTest\RecrutementTestBundle\Entity\Reponse;


/**
 * Description of TestController
 *
 * @author optimus
 */
class TestController extends Controller {
    
    public function listTestsAction() {
        
        $oEm = $this->getDoctrine()->getManager();
        
        $aListTests = $oEm->getRepository("RecrutementTestBundle:Test")
                ->findAll();
        
        return $this->render("RecrutementTestBundle::list_tests.html.twig", array (
            'aListTests' => $aListTests
        ));
    }
    
    public function manageTestAction($sAction = "creer", $iId, $iNbQuestion = 0) {
        
        $oEm           = $this->getDoctrine()->getManager();
        $oTestRepo     = $oEm->getRepository("RecrutementTestBundle:Test");
        $oQuestionRepo = $oEm->getRepository("RecrutementTestBundle:Question");
        $aTestQuestions = array();
        
        if ("modifier" == $sAction) {
            
            $oTest      = $oTestRepo->findOneById($iId);
            $oAdminForm = $this->createForm(new TestType(), $oTest);
            $aTestQuestions = $oQuestionRepo->findByTest($oTest);
        }
        else {
            
            $oTest      = new Test();
            $oAdminForm = $this->createForm(new TestType(), $oTest);
        }
        
        $oRequest = $this->getRequest();
        if ($oRequest->isMethod('post')) {
            
            $oAdminForm->bind($oRequest);
            
            if (null != $oRequest->request->get('intitule_question')) {
                foreach ($oRequest->request->get('intitule_question') as $sQuestion) {
                    
                    $oQuestion = new Question();
                    $oQuestion->setLibelle($sQuestion['label']);
                    $oEm->persist($oQuestion);
                    $oTest->addQuestion($oQuestion);
                }
            }
            
            
            if (null != $oRequest->request->get('valid_form')) {
                
                // récupère les données des questions faites en JQ pour les persiter a la chaines.
                $oEm->persist($oTest);
                $oEm->flush();
                var_dump("passe");
                return $this->redirect($this->generateUrl('manage_questions_form', array(
                    'iId' => $oTest->getId()
                    )));
            }
        }
        
        $oQuestion = null;
        
        
        
        return $this->render("RecrutementTestBundle::manage_test.html.twig", array(
            'form' => $oAdminForm->createView(),
            'aQuestions' => $aTestQuestions
        ));
    }
    
    
    public function dropTestAction($iId) {
        
        $oEm = $this->getDoctrine()->getManager();
        $oTestRepository = $oEm->getRepository("RecrutementTestBundle:Test");
        
        $oTest = $oTestRepository->find($iId);
        
        if (null != $oTest) {
            $oTestRepository->DeleteTestInCascade($oTest);
            $oEm->remove($oTest);
            $oEm->flush();
        }
        
        // TODO lbrau: Faire un flashbag en cas d'echec.
        return $this->redirect($this->generateUrl('list_test'));
    }
}

?>
