<?php

namespace RecrutementTest\RecrutementTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use RecrutementTest\RecrutementTestBundle\Form\AdminType;
use RecrutementTest\RecrutementTestBundle\Form\TestType;

use RecrutementTest\RecrutementTestBundle\Entity\Question;
use RecrutementTest\RecrutementTestBundle\Entity\Test;
use RecrutementTest\RecrutementTestBundle\Entity\Admin;


//use Acme\DemoBundle\Form\ContactType;

/**
 * Description of AdminController
 *
 * @author optimus
 */
class AdminController extends Controller {
    
    public function manageAdminAction($iId) {
        
        $oEm = $this->getDoctrine()->getManager();
        $oRequest = $this->getRequest();
        // poursuivre la recup des candidats
        $oCandidatRepo = $oEm->getRepository("RecrutementTestBundle:Candidat");
        
        if (null != $iId) {
                $oAdmin = $oEm->getRepository("RecrutementTestBundle:Admin")
                        ->findOneById($iId);
        }
        else {
            $oAdmin = new Admin();
        }
        
        $oAdminForm = $this->createForm(new AdminType(), $oAdmin);
        if ($oRequest->isMethod('post')) {
            
            $oAdminForm->bind($oRequest);
            $oEm->persist($oAdmin);
            $oEm->flush($oAdmin);
            return $this->redirect($this->generateUrl('list_admin'));
        }
        else {
            $oAdminForm = $this->createForm(new AdminType, $oAdmin);
        }
        
        
        return $this->render("RecrutementTestBundle::manage_admin.html.twig", array(
            'form' => $oAdminForm->createView()
        ));
    }
    
    public function manageTestAction($iId) {
        
        $oEm = $this->getDoctrine()->getManager();
        $oTestRepo = $oEm->getRepository("RecrutementTestBundle:Test");
        $oQuestionRepo = $oEm->getRepository("RecrutementTestBundle:Question");
        
        $oTest = $oTestRepo->findOneById($iId);
        
        $oAdminForm = $this->createForm(new TestType(), $oTest);
        $oRequest = $this->getRequest();
        if ($oRequest->isMethod('post')) {
            
            // Enregistrement des modifications.
            $oAdminForm->bind($oRequest);
            $oEm->persist($oTest);
            $oEm->flush($oTest);
        }
        
        return $this->render("RecrutementTestBundle::manage_test.html.twig", array(
            'form' => $oAdminForm->createView()
        ));
    }
    
    /**
     * Gere la creation|Modification des données des candidats
     * @return type
     */
    public function listCandidatsAction() {
        
        $oEm = $this->getDoctrine()->getManager();
        // recupere tout les candidats connu de la base.
        $oCandidatRepo = $oEm->getRepository("RecrutementTestBundle:Candidat");
        $aAllCandidats = $oCandidatRepo->findAll();
        // Enregistrement des tests d'essai.
        
//        var_dump("<PRE>",$aAllCandidats[0]->getNom());
//        var_dump("<PRE>",$aAllCandidats[0]->getTests());
        return $this->render("RecrutementTestBundle::liste_candidats.html.twig", array(
            'aAllCandidats' => $aAllCandidats
        ));
    }
    
    /**
     * Fournit un formulaire de creation de tests
     * 
     * @return formulaire de creation de tests
     */
    public function createTestAction() {
        
        $oEm = $this->getDoctrine()->getManager();
        $oAdminRepo = $oEm->getRepository("RecrutementTestBundle:Admin");
        $oQuestionRepo = $oEm->getRepository("RecrutementTestBundle:Question");

        $oAdmin = $oAdminRepo->findOneById(1);
        $oQuestion = $oQuestionRepo->findOneById(1);
        
        $oTest = new Test();
        $oTest->setAdmin($oAdmin);
        $oTest->addQuestion($oQuestion);
        
        $oForm = $this->createForm(new TestType(), $oTest);
        
        return $this->render("RecrutementTestBundle::manage_test.html.twig", array(
            'form' => $oForm->createView()
        ));
    }
    
    /**
     * Affiche la liste des administrateurs
     */
    public function listAdminAction() {
        
        $oEm = $this->getDoctrine()->getManager();
        
        $aAllAdmins = $oEm->getRepository("RecrutementTestBundle:Admin")
                                ->findAll();
        
        return $this->render("RecrutementTestBundle::list_admin.html.twig", array(
            'aAllAdmins' => $aAllAdmins
        ));
    }
    
    public function changeAdminVisiblityAction($sAction, $iId) {
        
        $sMessage = null;
        $oEm = $this->getDoctrine()->getManager();
        $oAdmin = $oEm->getRepository("RecrutementTestBundle:Admin")
                ->findOneById($iId);
        
        if ("activer" == $sAction) {
            $oAdmin->setActif(true);
        }
        else {
            $oAdmin->setActif(false);
        }
        
        $oEm->persist($oAdmin);
        $oEm->flush($oAdmin);
        
        return $this->redirect($this->generateUrl('list_admin'));
    }
    
     public function dropAdminAction($iId) {
        
        $oEm = $this->getDoctrine()->getManager();
        $oAdminRepository = $oEm->getRepository("RecrutementTestBundle:Admin");
        $oAdminToDrop = $oAdminRepository->findOneById($iId);
        $oEm->remove($oAdminToDrop);
        $oEm->flush();
        
        return $this->redirect($this->generateUrl('list_admin'));
    }
}

?>
