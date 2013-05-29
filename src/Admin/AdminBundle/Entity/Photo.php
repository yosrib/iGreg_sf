<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
{
    /**
     * @var integer
     */
    private $idPhoto;

    /**
     * @var integer
     */
    private $orderPhoto;

    /**
     * @var \Admin\AdminBundle\Entity\Gallerie
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
        $this->isoLangue = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get idPhoto
     *
     * @return integer 
     */
    public function getIdPhoto()
    {
        return $this->idPhoto;
    }

    /**
     * Set orderPhoto
     *
     * @param integer $orderPhoto
     * @return Photo
     */
    public function setOrderPhoto($orderPhoto)
    {
        $this->orderPhoto = $orderPhoto;
    
        return $this;
    }

    /**
     * Get orderPhoto
     *
     * @return integer 
     */
    public function getOrderPhoto()
    {
        return $this->orderPhoto;
    }

    /**
     * Set idGallerie
     *
     * @param \Admin\AdminBundle\Entity\Gallerie $idGallerie
     * @return Photo
     */
    public function setIdGallerie(\Admin\AdminBundle\Entity\Gallerie $idGallerie = null)
    {
        $this->idGallerie = $idGallerie;
    
        return $this;
    }

    /**
     * Get idGallerie
     *
     * @return \Admin\AdminBundle\Entity\Gallerie 
     */
    public function getIdGallerie()
    {
        return $this->idGallerie;
    }

    /**
     * Add isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     * @return Photo
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
