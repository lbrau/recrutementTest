<?php

namespace RecrutementTest\RecrutementTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * candidatTest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RecrutementTest\RecrutementTestBundle\Entity\candidatTestRepository")
 */
class candidatTest
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutTest", type="datetime")
     */
    private $dateDebutTest;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultat", type="integer")
     */
    private $resultat;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsPasse", type="integer")
     */
    private $tempsPasse;


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
     * Set dateDebutTest
     *
     * @param \DateTime $dateDebutTest
     * @return candidatTest
     */
    public function setDateDebutTest($dateDebutTest)
    {
        $this->dateDebutTest = $dateDebutTest;

        return $this;
    }

    /**
     * Get dateDebutTest
     *
     * @return \DateTime 
     */
    public function getDateDebutTest()
    {
        return $this->dateDebutTest;
    }

    /**
     * Set resultat
     *
     * @param integer $resultat
     * @return candidatTest
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
     * Set tempsPasse
     *
     * @param integer $tempsPasse
     * @return candidatTest
     */
    public function setTempsPasse($tempsPasse)
    {
        $this->tempsPasse = $tempsPasse;

        return $this;
    }

    /**
     * Get tempsPasse
     *
     * @return integer 
     */
    public function getTempsPasse()
    {
        return $this->tempsPasse;
    }
}
