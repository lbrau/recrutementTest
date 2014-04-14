<?php

namespace RecrutementTest\RecrutementTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RecrutementTest\RecrutementTestBundle\Entity\QuestionRepository")
 */
class Question
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
     * @ORM\ManyToOne(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Test", inversedBy="questions", cascade={"persist"})
     * @ORM\JoinColumn(name="test_id", referencedColumnName="id")
     */
    private $test;
    
    /**
     * @ORM\OneToMany(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Reponse", mappedBy="question", cascade={"persist"})
     */
    private $reponses;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=150)
     */
    private $libelle;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set libelle
     *
     * @param string $libelle
     * @return Question
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

    /**
     * Set test
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Test $test
     * @return Question
     */
    public function setTest(\RecrutementTest\RecrutementTestBundle\Entity\Test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \RecrutementTest\RecrutementTestBundle\Entity\Test 
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Add reponses
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Reponse $reponses
     * @return Question
     */
    public function addReponse(\RecrutementTest\RecrutementTestBundle\Entity\Reponse $reponse)
    {
        $this->reponses[] = $reponse;
        $reponse->setQuestion($this);
        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Reponse $reponses
     */
    public function removeReponse(\RecrutementTest\RecrutementTestBundle\Entity\Reponse $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
