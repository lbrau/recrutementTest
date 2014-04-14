<?php

namespace RecrutementTest\RecrutementTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RecrutementTest\RecrutementTestBundle\Form\AdminType;
use RecrutementTest\RecrutementTestBundle\Form\TestType;
use RecrutementTest\RecrutementTestBundle\Form\CandidatType;

use RecrutementTest\RecrutementTestBundle\Entity\Candidat;
use RecrutementTest\RecrutementTestBundle\Entity\CandidatTestMerged;



use RecrutementTest\RecrutementTestBundle\Entity\Question;
use RecrutementTest\RecrutementTestBundle\Entity\Test;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of CandidatController
 *
 * @author optimus
 */
class CandidatController extends Controller {
    
    /**
     * Renvoi un formulaire de creation de candidat.
     * 
     * @author Laurent BRAU <l.brau@novediagroup.com>
     */
    public function manageCandidatAction() {
        
        // instantiation des managers et repositories
        $oEm = $this->getDoctrine()->getManager();
        
        $oCandidatForm = $this->createForm(new CandidatType());
        
        return $this->render("RecrutementTestBundle::manage_candidat.html.twig", array(
            'formCandidat' =>$oCandidatForm->createView()
            ));
    }
    
    public function connexionAction() {
        
        $oEm = $this->getDoctrine()->getManager();
        $oRequest = $this->getRequest();
        
        $aTestMergedRepository = $oEm->getRepository('RecrutementTestBundle:CandidatTestMerged');
        $oTestRepository = $oEm->getRepository('RecrutementTestBundle:Test');
        
        $aTests = $oTestRepository->findAll();
        
        $oFormConnect = $this->createForm(new CandidatType);
        
        if ($oRequest->isMethod('post')) {
            
            // Recupération de l'email du formulaire de connexion.
            $sEmail  = $oRequest->request->get('recrutementtest_recrutementtestbundle_candidat')['email'];
            $sNom    = $oRequest->request->get('recrutementtest_recrutementtestbundle_candidat')['nom'];
            $sPrenom = $oRequest->request->get('recrutementtest_recrutementtestbundle_candidat')['prenom'];
            $iTest   = $oRequest->request->get("test_choice");
            
            $oTest = $oTestRepository->find($iTest);
            
            $oCandidatTestMerged = new CandidatTestMerged();
            $oCandidatTestMerged->setDateTest(new \DateTime());
            $oCandidatTestMerged->setTests($oTest);
            // Recuperation du repository du candidat.
            $oCandidat = $oEm->getRepository("RecrutementTestBundle:Candidat")
                    ->findOneByEmail($sEmail);
            
            if (null != $oCandidat) {
            
                echo "candidat ok! <br />";
            }
            else {
                
                $oCandidat = new Candidat();
                $oCandidat->setNom($sNom);
                $oCandidat->setPrenom($sPrenom);
                $oCandidat->setEmail($sEmail);
                
                $oEm->persist($oCandidat);
            }

            $oCandidatTestMerged->setCandidats($oCandidat);
            $oCandidatTestMerged->setTests($oTest);
            
            $oEm->persist($oCandidatTestMerged);
            $oEm->flush();

            return $this->redirect($this->generateUrl('candidat_accueil', array(
                    'iIdCandidat' => $oCandidat->getId(),
                    'iIdTest'     => $oTest->getId()
            )));
        }
        
        return $this->render("RecrutementTestBundle::connexion.html.twig", array(
            'oFormConnect' => $oFormConnect->createView(),
            'aTests'       => $aTests
        ));
    }
    
    /**
     * Affiche la page de test du candidat avec le test correspondant au choix de la connexion.
     * 
     * @param type $iIdCandidat : Identifiant du candidat
     * @param type $iIdTest     : Identifiant du test
     */
    public function accueilAction($iIdCandidat, $iIdTest) {
        
        $oEm = $this->getDoctrine()->getManager();
        $oCandidatRepository = $oEm->getRepository('RecrutementTestBundle:Candidat');
        $oTestRepository     = $oEm->getRepository('RecrutementTestBundle:Test');
        $oTest     = $oTestRepository->find($iIdTest);
        $oCandidat = $oCandidatRepository->find($iIdCandidat);
        
        return $this->render('RecrutementTestBundle::accueil_candidat.html.twig', array(
            'oCandidat' => $oCandidat,
            'oTest'     => $oTest
        ));
    }
}

?>
