<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallerie
 */
class Gallerie
{
    /**
     * @var integer
     */
    private $idGallerie;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $isoLangue;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idPage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->isoLangue = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPage = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get idGallerie
     *
     * @return integer 
     */
    public function getIdGallerie()
    {
        return $this->idGallerie;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Gallerie
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
     * Add isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     * @return Gallerie
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

    /**
     * Add idPage
     *
     * @param \Admin\AdminBundle\Entity\Page $idPage
     * @return Gallerie
     */
    public function addIdPage(\Admin\AdminBundle\Entity\Page $idPage)
    {
        $this->idPage[] = $idPage;
    
        return $this;
    }

    /**
     * Remove idPage
     *
     * @param \Admin\AdminBundle\Entity\Page $idPage
     */
    public function removeIdPage(\Admin\AdminBundle\Entity\Page $idPage)
    {
        $this->idPage->removeElement($idPage);
    }

    /**
     * Get idPage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }
}
