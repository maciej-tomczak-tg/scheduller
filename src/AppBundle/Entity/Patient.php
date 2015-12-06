<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;
    
    /**
     *
     * @var \DateTime
     * 
     * @ORM\Column(name="birth_date", type="datetime")
     */
    private $birthDate;

    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="drug", type="string")
     */
    private $drug;
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Patient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Patient
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
    
    function getBirthDate() {
        return $this->birthDate;
    }

    function setBirthDate(\DateTime $birthDate) {
        $this->birthDate = $birthDate;
    }
    
    /**
     * 
     * @return string
     */
    function getDrug() {
        return $this->drug;
    }

    /**
     * 
     * @param string $drug
     * 
     * @return $this
     */
    function setDrug($drug) {
        $this->drug = $drug;
        
        return $this;
    }


    
}

