<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 */
class Actualite
{
    /**
     * @var integer
     */
    private $idActualite;

    /**
     * @var \DateTime
     */
    private $dateActualite;

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
     * Get idActualite
     *
     * @return integer 
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * Set dateActualite
     *
     * @param \DateTime $dateActualite
     * @return Actualite
     */
    public function setDateActualite($dateActualite)
    {
        $this->dateActualite = $dateActualite;
    
        return $this;
    }

    /**
     * Get dateActualite
     *
     * @return \DateTime 
     */
    public function getDateActualite()
    {
        return $this->dateActualite;
    }

    /**
     * Add isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     * @return Actualite
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
