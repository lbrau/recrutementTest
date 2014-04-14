<?php

namespace RecrutementTest\RecrutementTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RecrutementTest\RecrutementTestBundle\Entity\ReponseRepository")
 */
class Reponse
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
     * @ORM\ManyToOne(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Question", cascade={"persist"})
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="text")
     */
    private $intitule;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_true", type="boolean", nullable=true)
     */
    private $isTrue;

    /**
     * toString
     * 
     */
    public function __toString()
    {
        return $this->intitule;
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
     * Set intitule
     *
     * @param string $intitule
     * @return Reponse
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set isTrue
     *
     * @param boolean $isTrue
     * @return Reponse
     */
    public function setIsTrue($isTrue)
    {
        $this->isTrue = $isTrue;

        return $this;
    }

    /**
     * Get isTrue
     *
     * @return boolean 
     */
    public function getIsTrue()
    {
        return $this->isTrue;
    }

    /**
     * Set question
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\RecrutementTest\RecrutementTestBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \RecrutementTest\RecrutementTestBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
