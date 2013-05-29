<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 */
class Page
{
    /**
     * @var integer
     */
    private $idPage;

    /**
     * @var integer
     */
    private $menuPage;

    /**
     * @var integer
     */
    private $parentPage;

    /**
     * @var integer
     */
    private $orderPage;

    /**
     * @var \Admin\AdminBundle\Entity\Typepage
     */
    private $idTypepage;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idGallerie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $isoLangue;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idGallerie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isoLangue = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get idPage
     *
     * @return integer 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set menuPage
     *
     * @param integer $menuPage
     * @return Page
     */
    public function setMenuPage($menuPage)
    {
        $this->menuPage = $menuPage;
    
        return $this;
    }

    /**
     * Get menuPage
     *
     * @return integer 
     */
    public function getMenuPage()
    {
        return $this->menuPage;
    }

    /**
     * Set parentPage
     *
     * @param integer $parentPage
     * @return Page
     */
    public function setParentPage($parentPage)
    {
        $this->parentPage = $parentPage;
    
        return $this;
    }

    /**
     * Get parentPage
     *
     * @return integer 
     */
    public function getParentPage()
    {
        return $this->parentPage;
    }

    /**
     * Set orderPage
     *
     * @param integer $orderPage
     * @return Page
     */
    public function setOrderPage($orderPage)
    {
        $this->orderPage = $orderPage;
    
        return $this;
    }

    /**
     * Get orderPage
     *
     * @return integer 
     */
    public function getOrderPage()
    {
        return $this->orderPage;
    }

    /**
     * Set idTypepage
     *
     * @param \Admin\AdminBundle\Entity\Typepage $idTypepage
     * @return Page
     */
    public function setIdTypepage(\Admin\AdminBundle\Entity\Typepage $idTypepage = null)
    {
        $this->idTypepage = $idTypepage;
    
        return $this;
    }

    /**
     * Get idTypepage
     *
     * @return \Admin\AdminBundle\Entity\Typepage 
     */
    public function getIdTypepage()
    {
        return $this->idTypepage;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Page
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
     * Add idGallerie
     *
     * @param \Admin\AdminBundle\Entity\Gallerie $idGallerie
     * @return Page
     */
    public function addIdGallerie(\Admin\AdminBundle\Entity\Gallerie $idGallerie)
    {
        $this->idGallerie[] = $idGallerie;
    
        return $this;
    }

    /**
     * Remove idGallerie
     *
     * @param \Admin\AdminBundle\Entity\Gallerie $idGallerie
     */
    public function removeIdGallerie(\Admin\AdminBundle\Entity\Gallerie $idGallerie)
    {
        $this->idGallerie->removeElement($idGallerie);
    }

    /**
     * Get idGallerie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdGallerie()
    {
        return $this->idGallerie;
    }

    /**
     * Add isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     * @return Page
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
