<?php

namespace RecrutementTest\RecrutementTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatTestMerged
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RecrutementTest\RecrutementTestBundle\Entity\CandidatTestMergedRepository")
 */
class CandidatTestMerged
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Candidat")
     */
    private $candidats;
    
    /**
     * @ORM\ManyToOne(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Test")
     */
    private $tests;
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTest", type="datetime")
     */
    private $dateTest;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat", type="integer", nullable=true)
     */
    private $resultat;

    /**
     * @var integer
     *
     * @ORM\Column(name="temps", type="integer", nullable=true)
     */
    private $temps;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateTest
     *
     * @param \DateTime $dateTest
     * @return CandidatTestMerged
     */
    public function setDateTest($dateTest)
    {
        $this->dateTest = $dateTest;

        return $this;
    }

    /**
     * Get dateTest
     *
     * @return \DateTime 
     */
    public function getDateTest()
    {
        return $this->dateTest;
    }

    /**
     * Set resultat
     *
     * @param integer $resultat
     * @return CandidatTestMerged
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return integer 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set temps
     *
     * @param integer $temps
     * @return CandidatTestMerged
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return integer 
     */
    public function getTemps()
    {
        return $this->temps;
    }
    
    /**
    * toString
    * 
    */
    public function __toString()
    {
        $oTest = $this->getTests();
        return $oTest->getNom();
    }

    /**
     * Set candidats
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Test $candidats
     * @return CandidatTestMerged
     */
    public function setCandidats(\RecrutementTest\RecrutementTestBundle\Entity\Candidat $candidats = null)
    {
        $this->candidats = $candidats;

        return $this;
    }

    /**
     * Get candidats
     *
     * @return \RecrutementTest\RecrutementTestBundle\Entity\Test 
     */
    public function getCandidats()
    {
        return $this->candidats;
    }

    /**
     * Set tests
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Candidat $tests
     * @return CandidatTestMerged
     */
    public function setTests(\RecrutementTest\RecrutementTestBundle\Entity\Test $tests = null)
    {
        $this->tests = $tests;

        return $this;
    }

    /**
     * Get tests
     *
     * @return \RecrutementTest\RecrutementTestBundle\Entity\Candidat 
     */
    public function getTests()
    {
        return $this->tests;
    }
}