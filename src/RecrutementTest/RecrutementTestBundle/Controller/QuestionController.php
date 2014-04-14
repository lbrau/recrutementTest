<?php

namespace RecrutementTest\RecrutementTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RecrutementTest\RecrutementTestBundle\Entity\Question;
use RecrutementTest\RecrutementTestBundle\Entity\Reponse;

use RecrutementTest\RecrutementTestBundle\Form\QuestionType;


class QuestionController extends Controller {
    
    public function displayQuestionFormAction($iId) {
        
        $oEm                 = $this->getDoctrine()->getManager();
        $oRequest            = $this->getRequest();
        $oTestRepository     = $oEm->getRepository("RecrutementTestBundle:Test");
        $oQuestionRepository = $oEm->getRepository("RecrutementTestBundle:Question");
        
        
        $oFormQuestion = $this->createForm(new QuestionType());
        
        if ($oRequest->isMethod('post')) {
            
            $iIdCurrentTest   = $oRequest->request->get('recrutementtest_recrutementtestbundle_question')['test'];
            $sLibelleQuestion = $oRequest->request->get('recrutementtest_recrutementtestbundle_question')['libelle'];
            $aReponses        = $oRequest->request->get('intitule_reponse');
            $oTest = $oTestRepository->findOneById($iIdCurrentTest);
            
            $oQuestion = new Question();
            $oQuestion->setLibelle($sLibelleQuestion);
            $oQuestion->setTest($oTest);
            $oEm->persist($oQuestion);
            
            foreach ($aReponses as $aReponsesRow) {
                
                $oReponse = new Reponse();
                $oReponse->setIntitule($aReponsesRow['label']);
                
                if (isset($aReponsesRow['label'])) {
                    $oReponse->setIntitule($aReponsesRow['label']);
                }
                
                if (isset($aReponsesRow['is_true'])) {
                    $oReponse->setIsTrue(true);
                }
                
                $oReponse->setQuestion($oQuestion);
                $oEm->persist($oReponse);
            }
            
            $oEm->flush();
            
            return $this->redirect($this->generateUrl("manage_questions_form"));
        }
        
        // Recupere l'identifiant de la question courante pour generé le formulaire Question/reponses
        if (null != $iId) {
            
            $oCurrentQuestion = $oQuestionRepository->findOneById($iId);
            $oFormQuestion = $this->createForm(new QuestionType(), $oCurrentQuestion);
        }
        
        return $this->render("RecrutementTestBundle::manage_question.html.twig", array(
            'form_question' => $oFormQuestion->createView()
        ));
    }
    /**
     * Gere le formaulaire de questions via l'interface de modificiation du questionnaire
     * 
     * @param Integer $iIdQuestion:  Identifiant de la question courante.
     */
    public function manageQuestionAction($iIdQuestion) {
        
        $oEm                 = $this->getDoctrine()->getManager();
        $oRequest            = $this->getRequest();
        $oTestRepository     = $oEm->getRepository("RecrutementTestBundle:Test");
        $oQuestionRepository = $oEm->getRepository("RecrutementTestBundle:Question");
        $oResponseRepository = $oEm->getRepository("RecrutementTestBundle:Reponse");
        
        $oQuestion = $oQuestionRepository->findOneById($iIdQuestion);
        $aReponses = $oResponseRepository->findByQuestion($oQuestion);
        
        if ($oRequest->isMethod('post')) {
            
            // Recuperation champs modifies + Identifiant base.
            if (null != $oRequest->request->get('reponse_base')) {
                foreach ($oRequest->request->get('reponse_base') as $aReponsesToModify) {
                    
                    $oCurrentReponse = $oResponseRepository->findOneById($aReponsesToModify['identifiant']);
                    
                    $oCurrentReponse->setIntitule($aReponsesToModify['intitule']);
                    
                    $oCurrentReponse->setIntitule($aReponsesToModify['intitule']);
                    if (isset($aReponsesToModify['is_true'])) {
                        $oCurrentReponse->setIsTrue(true);
                    }
                    else {
                        $oCurrentReponse->setIsTrue(false);
                    }
                    $oEm->persist($oCurrentReponse);
                    $oQuestion->addReponse($oCurrentReponse);
                    
                    $oEm->persist($oQuestion);
                    $oEm->flush();
                }
            }
            
            // Recuperation champs modifié + persist en base
            if (null != $oRequest->request->get('intitule_reponse')) {
                foreach ($oRequest->request->get('intitule_reponse') as $aReponseAdded) {
                    
                    $oNewReponse = new Reponse();
                    $oNewReponse->setIntitule($aReponseAdded['label']);

                    if (isset($aReponseAdded['is_true'])) {

                        $oNewReponse->setIsTrue(true);
                    }
                    
                    $oEm->persist($oNewReponse);
                    $oQuestion->addReponse($oNewReponse);
                    $oEm->persist($oQuestion);
                }
                
                $oEm->flush();
            }
            
            return $this->redirect($this->generateUrl("manage_question", array(
                'iIdQuestion' => $oQuestion->getId()
            )));
        }
        
        $oFormQuestion = $this->createForm(new QuestionType(), $oQuestion)
                ->createView();
        
        return $this->render("RecrutementTestBundle::manage_question.html.twig", array(
            'form_question' => $oFormQuestion,
            'aReponses' => $oQuestion->getReponses()
        ));
    }
    
    /**
     * Supprime une question du questionnaire.
     * 
     * @param type $iIdQuestion
     */
    public function dropQuestionAction($iIdQuestion) {
        
        $oEm = $this->getDoctrine()->getManager();
        $oQuestionRepository = $oEm->getRepository("RecrutementTestBundle:Question");
        $oReponseRepository  = $oEm->getRepository("RecrutementTestBundle:Reponse");
        
        $oQuestion = $oQuestionRepository->find($iIdQuestion);
        $aReponses = $oReponseRepository->findByQuestion($oQuestion);
        $oReponseRepository->truncateQuestion($oQuestion);
        
        $oEm->remove($oQuestion);
        $oEm->flush();
        
        
        return $this->redirect($this->generateUrl('manage_question', array(
            'iIdQuestion' => $oQuestion->getId()
        )));
    }
}

?>
