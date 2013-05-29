<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dialogue
 */
class Dialogue
{
    /**
     * @var integer
     */
    private $idDialogue;

    /**
     * @var string
     */
    private $auteurDialogue;

    /**
     * @var string
     */
    private $descriptionDialogue;

    /**
     * @var \DateTime
     */
    private $dateDialogue;

    /**
     * @var integer
     */
    private $actifDialogue;

    /**
     * @var \Admin\AdminBundle\Entity\Sujet
     */
    private $idSujet;

    /**
     * @var \Admin\AdminBundle\Entity\Admin
     */
    private $idAdmin;

    /**
     * @var \Admin\AdminBundle\Entity\Client
     */
    private $idClient;


    /**
     * Get idDialogue
     *
     * @return integer 
     */
    public function getIdDialogue()
    {
        return $this->idDialogue;
    }

    /**
     * Set auteurDialogue
     *
     * @param string $auteurDialogue
     * @return Dialogue
     */
    public function setAuteurDialogue($auteurDialogue)
    {
        $this->auteurDialogue = $auteurDialogue;
    
        return $this;
    }

    /**
     * Get auteurDialogue
     *
     * @return string 
     */
    public function getAuteurDialogue()
    {
        return $this->auteurDialogue;
    }

    /**
     * Set descriptionDialogue
     *
     * @param string $descriptionDialogue
     * @return Dialogue
     */
    public function setDescriptionDialogue($descriptionDialogue)
    {
        $this->descriptionDialogue = $descriptionDialogue;
    
        return $this;
    }

    /**
     * Get descriptionDialogue
     *
     * @return string 
     */
    public function getDescriptionDialogue()
    {
        return $this->descriptionDialogue;
    }

    /**
     * Set dateDialogue
     *
     * @param \DateTime $dateDialogue
     * @return Dialogue
     */
    public function setDateDialogue($dateDialogue)
    {
        $this->dateDialogue = $dateDialogue;
    
        return $this;
    }

    /**
     * Get dateDialogue
     *
     * @return \DateTime 
     */
    public function getDateDialogue()
    {
        return $this->dateDialogue;
    }

    /**
     * Set actifDialogue
     *
     * @param integer $actifDialogue
     * @return Dialogue
     */
    public function setActifDialogue($actifDialogue)
    {
        $this->actifDialogue = $actifDialogue;
    
        return $this;
    }

    /**
     * Get actifDialogue
     *
     * @return integer 
     */
    public function getActifDialogue()
    {
        return $this->actifDialogue;
    }

    /**
     * Set idSujet
     *
     * @param \Admin\AdminBundle\Entity\Sujet $idSujet
     * @return Dialogue
     */
    public function setIdSujet(\Admin\AdminBundle\Entity\Sujet $idSujet = null)
    {
        $this->idSujet = $idSujet;
    
        return $this;
    }

    /**
     * Get idSujet
     *
     * @return \Admin\AdminBundle\Entity\Sujet 
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * Set idAdmin
     *
     * @param \Admin\AdminBundle\Entity\Admin $idAdmin
     * @return Dialogue
     */
    public function setIdAdmin(\Admin\AdminBundle\Entity\Admin $idAdmin = null)
    {
        $this->idAdmin = $idAdmin;
    
        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return \Admin\AdminBundle\Entity\Admin 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set idClient
     *
     * @param \Admin\AdminBundle\Entity\Client $idClient
     * @return Dialogue
     */
    public function setIdClient(\Admin\AdminBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return \Admin\AdminBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
