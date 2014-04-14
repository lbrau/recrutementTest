<?php

namespace RecrutementTest\RecrutementTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RecrutementTest\RecrutementTestBundle\Entity\AdminRepository")
 */
class Admin
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
     *
     * @ORM\OneToMany(targetEntity="RecrutementTest\RecrutementTestBundle\Entity\Test", mappedBy="admin", cascade="persist")
     */
    private $tests;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;
    
       /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true)
     */
    private $actif;


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
     * @return Admin
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
     * Set password
     *
     * @param string $password
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    public function __toString() {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Admin
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Add tests
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Test $tests
     * @return Admin
     */
    public function addTest(\RecrutementTest\RecrutementTestBundle\Entity\Test $tests)
    {
        $this->tests[] = $tests;

        return $this;
    }

    /**
     * Remove tests
     *
     * @param \RecrutementTest\RecrutementTestBundle\Entity\Test $tests
     */
    public function removeTest(\RecrutementTest\RecrutementTestBundle\Entity\Test $tests)
    {
        $this->tests->removeElement($tests);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTests()
    {
        return $this->tests;
    }
}
