<?php

namespace RecrutementTest\RecrutementTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RecrutementTest\RecrutementTestBundle\Entity\TestRepository")
 */
class Test
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
     * @ORM\OneToMany(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Question", mappedBy="test")
     */
    protected $questions;
    
    /**
     * @ORM\OneToMany(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\CandidatTestMerged", mappedBy="candidats")
     */
    private $candidats;
    
    /**
     * @ORM\ManyToOne(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Admin", cascade={"persist"})
     */
    private $admin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=150)
     */
    private $libelle;
    
    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="integer", length=11, nullable=true)
     */
    private $resultat;
    
    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="integer", length=11, nullable=true)
     */
    private $duree;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;
    

    

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
     * Set nom
     *
     * @param string $nom
     * @return Test
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Test
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    public function getQuestions() {
        
        return $this->questions;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->candidats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set questions
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Question $questions
     * @return Test
     */
    public function setQuestions($questions = null)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Add candidats
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Candidat $candidats
     * @return Test
     */
    public function addCandidat(\RecrutementTest\RecrutementTestBundle\Entity\Candidat $candidats)
    {
        $this->candidats[] = $candidats;
        

        return $this;
    }

    /**
     * Remove candidats
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Candidat $candidats
     */
    public function removeCandidat(\RecrutementTest\RecrutementTestBundle\Entity\Candidat $candidats)
    {
        $this->candidats->removeElement($candidats);
    }

    /**
     * Get candidats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidats()
    {
        return $this->candidats;
    }

    /**
     * Set admin
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Admin $admin
     * @return Test
     */
    public function setAdmin(\RecrutementTest\RecrutementTestBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \RecrutementTest\RecrutementTestBundle\Entity\Admin 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set resultat
     *
     * @param integer $resultat
     * @return Test
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
     * Set duree
     *
     * @param integer $duree
     * @return Test
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Test
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * toString
     * 
     */
    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Test
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Question $questions
     */
    public function removeQuestion(\RecrutementTest\RecrutementTestBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Add questions
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Question $questions
     * @return Test
     */
    public function addQuestion(\RecrutementTest\RecrutementTestBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;
        $questions->setTest($this);
        
        return $this;
    }
}