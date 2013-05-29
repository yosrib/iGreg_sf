<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sujet
 */
class Sujet
{
    /**
     * @var integer
     */
    private $idSujet;

    /**
     * @var string
     */
    private $titreSujet;

    /**
     * @var \DateTime
     */
    private $dateSujet;

    /**
     * @var integer
     */
    private $actifSujet;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;

    /**
     * @var \Admin\AdminBundle\Entity\Admin
     */
    private $idAdmin;

    /**
     * @var \Admin\AdminBundle\Entity\Client
     */
    private $idClient;


    /**
     * Get idSujet
     *
     * @return integer 
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * Set titreSujet
     *
     * @param string $titreSujet
     * @return Sujet
     */
    public function setTitreSujet($titreSujet)
    {
        $this->titreSujet = $titreSujet;
    
        return $this;
    }

    /**
     * Get titreSujet
     *
     * @return string 
     */
    public function getTitreSujet()
    {
        return $this->titreSujet;
    }

    /**
     * Set dateSujet
     *
     * @param \DateTime $dateSujet
     * @return Sujet
     */
    public function setDateSujet($dateSujet)
    {
        $this->dateSujet = $dateSujet;
    
        return $this;
    }

    /**
     * Get dateSujet
     *
     * @return \DateTime 
     */
    public function getDateSujet()
    {
        return $this->dateSujet;
    }

    /**
     * Set actifSujet
     *
     * @param integer $actifSujet
     * @return Sujet
     */
    public function setActifSujet($actifSujet)
    {
        $this->actifSujet = $actifSujet;
    
        return $this;
    }

    /**
     * Get actifSujet
     *
     * @return integer 
     */
    public function getActifSujet()
    {
        return $this->actifSujet;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Sujet
     */
    public function setIdProjet(\Admin\AdminBundle\Entity\Projet $idProjet = null)
    {
        $this->idProjet = $idProjet;
    
        return $this;
    }

    /**
     * Get idProjet
     *
     * @return \Admin\AdminBundle\Entity\Projet 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set idAdmin
     *
     * @param \Admin\AdminBundle\Entity\Admin $idAdmin
     * @return Sujet
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
     * @return Sujet
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
