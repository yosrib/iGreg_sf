<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 */
class Admin
{
    /**
     * @var integer
     */
    private $idAdmin;

    /**
     * @var string
     */
    private $emailAdmin;

    /**
     * @var string
     */
    private $passAdmin;

    /**
     * @var integer
     */
    private $actifAdmin;

    /**
     * @var string
     */
    private $nomAdmin;

    /**
     * @var string
     */
    private $prenomAdmin;

    /**
     * @var \DateTime
     */
    private $datenaissanceAdmin;

    /**
     * @var integer
     */
    private $telAdmin;

    /**
     * @var \Admin\AdminBundle\Entity\Typeadmin
     */
    private $idTypeadmin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idProjet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProjet = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get idAdmin
     *
     * @return integer 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set emailAdmin
     *
     * @param string $emailAdmin
     * @return Admin
     */
    public function setEmailAdmin($emailAdmin)
    {
        $this->emailAdmin = $emailAdmin;
    
        return $this;
    }

    /**
     * Get emailAdmin
     *
     * @return string 
     */
    public function getEmailAdmin()
    {
        return $this->emailAdmin;
    }

    /**
     * Set passAdmin
     *
     * @param string $passAdmin
     * @return Admin
     */
    public function setPassAdmin($passAdmin)
    {
        $this->passAdmin = $passAdmin;
    
        return $this;
    }

    /**
     * Get passAdmin
     *
     * @return string 
     */
    public function getPassAdmin()
    {
        return $this->passAdmin;
    }

    /**
     * Set actifAdmin
     *
     * @param integer $actifAdmin
     * @return Admin
     */
    public function setActifAdmin($actifAdmin)
    {
        $this->actifAdmin = $actifAdmin;
    
        return $this;
    }

    /**
     * Get actifAdmin
     *
     * @return integer 
     */
    public function getActifAdmin()
    {
        return $this->actifAdmin;
    }

    /**
     * Set nomAdmin
     *
     * @param string $nomAdmin
     * @return Admin
     */
    public function setNomAdmin($nomAdmin)
    {
        $this->nomAdmin = $nomAdmin;
    
        return $this;
    }

    /**
     * Get nomAdmin
     *
     * @return string 
     */
    public function getNomAdmin()
    {
        return $this->nomAdmin;
    }

    /**
     * Set prenomAdmin
     *
     * @param string $prenomAdmin
     * @return Admin
     */
    public function setPrenomAdmin($prenomAdmin)
    {
        $this->prenomAdmin = $prenomAdmin;
    
        return $this;
    }

    /**
     * Get prenomAdmin
     *
     * @return string 
     */
    public function getPrenomAdmin()
    {
        return $this->prenomAdmin;
    }

    /**
     * Set datenaissanceAdmin
     *
     * @param \DateTime $datenaissanceAdmin
     * @return Admin
     */
    public function setDatenaissanceAdmin($datenaissanceAdmin)
    {
        $this->datenaissanceAdmin = $datenaissanceAdmin;
    
        return $this;
    }

    /**
     * Get datenaissanceAdmin
     *
     * @return \DateTime 
     */
    public function getDatenaissanceAdmin()
    {
        return $this->datenaissanceAdmin;
    }

    /**
     * Set telAdmin
     *
     * @param integer $telAdmin
     * @return Admin
     */
    public function setTelAdmin($telAdmin)
    {
        $this->telAdmin = $telAdmin;
    
        return $this;
    }

    /**
     * Get telAdmin
     *
     * @return integer 
     */
    public function getTelAdmin()
    {
        return $this->telAdmin;
    }

    /**
     * Set idTypeadmin
     *
     * @param \Admin\AdminBundle\Entity\Typeadmin $idTypeadmin
     * @return Admin
     */
    public function setIdTypeadmin(\Admin\AdminBundle\Entity\Typeadmin $idTypeadmin = null)
    {
        $this->idTypeadmin = $idTypeadmin;
    
        return $this;
    }

    /**
     * Get idTypeadmin
     *
     * @return \Admin\AdminBundle\Entity\Typeadmin 
     */
    public function getIdTypeadmin()
    {
        return $this->idTypeadmin;
    }

    /**
     * Add idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Admin
     */
    public function addIdProjet(\Admin\AdminBundle\Entity\Projet $idProjet)
    {
        $this->idProjet[] = $idProjet;
    
        return $this;
    }

    /**
     * Remove idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     */
    public function removeIdProjet(\Admin\AdminBundle\Entity\Projet $idProjet)
    {
        $this->idProjet->removeElement($idProjet);
    }

    /**
     * Get idProjet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }
}
