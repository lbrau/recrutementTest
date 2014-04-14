<?php

namespace RecrutementTest\RecrutementTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use RecrutementTest\RecrutementTestBundle\Entity\Reponse;


class ReponseController extends Controller {
    
    
    public function manageReponseAjaxAction() {
        $oEm                 = $this->getDoctrine()->getManager();
        $oRequest            = $this->getRequest();
        //$oTestRepository     = $oEm->getRepository("RecrutementTestBundle:Test");
        $oQuestionRepository = $oEm->getRepository("RecrutementTestBundle:Question");
        //$oResponseRepository = $oEm->getRepository("RecrutementTestBundle:Reponse");
        
        if($oRequest->isXmlHttpRequest()){



            $intitule_response = $oRequest->request->get('intitule_response');
            //$response = $oRequest->request->get('response');
            $isTrue = $oRequest->request->get('is_true');
            if($isTrue){$isTrue=true;} else{$isTrue=false;}
            $idQuestion = $oRequest->request->get('id_question');
                     
            $question = $oQuestionRepository->find($idQuestion);
         
            $oReponse = new Reponse();
            $oReponse->setIntitule($intitule_response);
            $oReponse->setIsTrue($isTrue);
            $oReponse->setQuestion($question);

            $oEm->persist($oReponse);
            $oEm->flush();
            
            $response = new JsonResponse();
            $response->setData(json_encode(array('data'=>true)));

        } else {

            $response = new JsonResponse();
            $response->setData(json_encode(array('data'=>false)));
        }
         return $response;

            
    }
    
    
    
    public function loadReponsePopinAjaxAction() {
        
        $oEm                 = $this->getDoctrine()->getManager();
        $oRequest            = $this->getRequest();
        //$oTestRepository     = $oEm->getRepository("RecrutementTestBundle:Test");
        $oQuestionRepository = $oEm->getRepository("RecrutementTestBundle:Question");
        $oResponseRepository = $oEm->getRepository("RecrutementTestBundle:Reponse");
        
        var_dump("coucou");die;
    }
    
    public function dropReponseInQuestionAction($iIdReponse) {
        
        $oEm                 = $this->getDoctrine()->getManager();
        $oResponseRepository = $oEm->getRepository("RecrutementTestBundle:Reponse");
        
        $oReponse = $oResponseRepository->find($iIdReponse);
        $iIdQuestion = $oReponse->getQuestion()->getId();
        // TODO lbrau : faire la gestion d'erreur (flashbag en cas de non-instanciation).
        $oEm->remove($oReponse);
        $oEm->flush();
        // TODO lbrau : Voir pour faire un flashbag de succes et d'echec.
        return $this->redirect($this->generateUrl('manage_question', array(
            'iIdQuestion' => $iIdQuestion
            )));
    }
}

?>
