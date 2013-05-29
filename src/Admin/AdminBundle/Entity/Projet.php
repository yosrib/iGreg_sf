<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 */
class Projet
{
    /**
     * @var integer
     */
    private $idProjet;

    /**
     * @var string
     */
    private $nomProjet;

    /**
     * @var string
     */
    private $userProjet;

    /**
     * @var string
     */
    private $passProjet;

    /**
     * @var string
     */
    private $analyticsProjet;

    /**
     * @var integer
     */
    private $maintenanceProjet;

    /**
     * @var \DateTime
     */
    private $dateproductionProjet;

    /**
     * @var \DateTime
     */
    private $dateProjet;

    /**
     * @var integer
     */
    private $lattitudeProjet;

    /**
     * @var integer
     */
    private $longitudeProjet;

    /**
     * @var string
     */
    private $urlproductionProjet;

    /**
     * @var \Admin\AdminBundle\Entity\Client
     */
    private $idClient;

    /**
     * @var \Admin\AdminBundle\Entity\Actualite
     */
    private $idActualite;

    /**
     * @var \Admin\AdminBundle\Entity\Etatprojet
     */
    private $idEtatprojet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idAdmin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $isoLangue;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAdmin = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isoLangue = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get idProjet
     *
     * @return integer 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set nomProjet
     *
     * @param string $nomProjet
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;
    
        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string 
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set userProjet
     *
     * @param string $userProjet
     * @return Projet
     */
    public function setUserProjet($userProjet)
    {
        $this->userProjet = $userProjet;
    
        return $this;
    }

    /**
     * Get userProjet
     *
     * @return string 
     */
    public function getUserProjet()
    {
        return $this->userProjet;
    }

    /**
     * Set passProjet
     *
     * @param string $passProjet
     * @return Projet
     */
    public function setPassProjet($passProjet)
    {
        $this->passProjet = $passProjet;
    
        return $this;
    }

    /**
     * Get passProjet
     *
     * @return string 
     */
    public function getPassProjet()
    {
        return $this->passProjet;
    }

    /**
     * Set analyticsProjet
     *
     * @param string $analyticsProjet
     * @return Projet
     */
    public function setAnalyticsProjet($analyticsProjet)
    {
        $this->analyticsProjet = $analyticsProjet;
    
        return $this;
    }

    /**
     * Get analyticsProjet
     *
     * @return string 
     */
    public function getAnalyticsProjet()
    {
        return $this->analyticsProjet;
    }

    /**
     * Set maintenanceProjet
     *
     * @param integer $maintenanceProjet
     * @return Projet
     */
    public function setMaintenanceProjet($maintenanceProjet)
    {
        $this->maintenanceProjet = $maintenanceProjet;
    
        return $this;
    }

    /**
     * Get maintenanceProjet
     *
     * @return integer 
     */
    public function getMaintenanceProjet()
    {
        return $this->maintenanceProjet;
    }

    /**
     * Set dateproductionProjet
     *
     * @param \DateTime $dateproductionProjet
     * @return Projet
     */
    public function setDateproductionProjet($dateproductionProjet)
    {
        $this->dateproductionProjet = $dateproductionProjet;
    
        return $this;
    }

    /**
     * Get dateproductionProjet
     *
     * @return \DateTime 
     */
    public function getDateproductionProjet()
    {
        return $this->dateproductionProjet;
    }

    /**
     * Set dateProjet
     *
     * @param \DateTime $dateProjet
     * @return Projet
     */
    public function setDateProjet($dateProjet)
    {
        $this->dateProjet = $dateProjet;
    
        return $this;
    }

    /**
     * Get dateProjet
     *
     * @return \DateTime 
     */
    public function getDateProjet()
    {
        return $this->dateProjet;
    }

    /**
     * Set lattitudeProjet
     *
     * @param integer $lattitudeProjet
     * @return Projet
     */
    public function setLattitudeProjet($lattitudeProjet)
    {
        $this->lattitudeProjet = $lattitudeProjet;
    
        return $this;
    }

    /**
     * Get lattitudeProjet
     *
     * @return integer 
     */
    public function getLattitudeProjet()
    {
        return $this->lattitudeProjet;
    }

    /**
     * Set longitudeProjet
     *
     * @param integer $longitudeProjet
     * @return Projet
     */
    public function setLongitudeProjet($longitudeProjet)
    {
        $this->longitudeProjet = $longitudeProjet;
    
        return $this;
    }

    /**
     * Get longitudeProjet
     *
     * @return integer 
     */
    public function getLongitudeProjet()
    {
        return $this->longitudeProjet;
    }

    /**
     * Set urlproductionProjet
     *
     * @param string $urlproductionProjet
     * @return Projet
     */
    public function setUrlproductionProjet($urlproductionProjet)
    {
        $this->urlproductionProjet = $urlproductionProjet;
    
        return $this;
    }

    /**
     * Get urlproductionProjet
     *
     * @return string 
     */
    public function getUrlproductionProjet()
    {
        return $this->urlproductionProjet;
    }

    /**
     * Set idClient
     *
     * @param \Admin\AdminBundle\Entity\Client $idClient
     * @return Projet
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

    /**
     * Set idActualite
     *
     * @param \Admin\AdminBundle\Entity\Actualite $idActualite
     * @return Projet
     */
    public function setIdActualite(\Admin\AdminBundle\Entity\Actualite $idActualite = null)
    {
        $this->idActualite = $idActualite;
    
        return $this;
    }

    /**
     * Get idActualite
     *
     * @return \Admin\AdminBundle\Entity\Actualite 
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * Set idEtatprojet
     *
     * @param \Admin\AdminBundle\Entity\Etatprojet $idEtatprojet
     * @return Projet
     */
    public function setIdEtatprojet(\Admin\AdminBundle\Entity\Etatprojet $idEtatprojet = null)
    {
        $this->idEtatprojet = $idEtatprojet;
    
        return $this;
    }

    /**
     * Get idEtatprojet
     *
     * @return \Admin\AdminBundle\Entity\Etatprojet 
     */
    public function getIdEtatprojet()
    {
        return $this->idEtatprojet;
    }

    /**
     * Add idAdmin
     *
     * @param \Admin\AdminBundle\Entity\Admin $idAdmin
     * @return Projet
     */
    public function addIdAdmin(\Admin\AdminBundle\Entity\Admin $idAdmin)
    {
        $this->idAdmin[] = $idAdmin;
    
        return $this;
    }

    /**
     * Remove idAdmin
     *
     * @param \Admin\AdminBundle\Entity\Admin $idAdmin
     */
    public function removeIdAdmin(\Admin\AdminBundle\Entity\Admin $idAdmin)
    {
        $this->idAdmin->removeElement($idAdmin);
    }

    /**
     * Get idAdmin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Add isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     * @return Projet
     */
    public function addIsoLangue(\Admin\AdminBundle\Entity\Langue $isoLangue)
    {
        $this->isoLangue[] = $isoLangue;
    
        return $this;
    }

    /**
     * Remove isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     */
    public function removeIsoLangue(\Admin\AdminBundle\Entity\Langue $isoLangue)
    {
        $this->isoLangue->removeElement($isoLangue);
    }

    /**
     * Get isoLangue
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIsoLangue()
    {
        return $this->isoLangue;
    }
}
