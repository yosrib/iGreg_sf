<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 */
class Newsletter
{
    /**
     * @var integer
     */
    private $idNewsletter;

    /**
     * @var string
     */
    private $sujetNewsletter;

    /**
     * @var string
     */
    private $bodyNewsletter;

    /**
     * @var \DateTime
     */
    private $dateNewsletter;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;


    /**
     * Get idNewsletter
     *
     * @return integer 
     */
    public function getIdNewsletter()
    {
        return $this->idNewsletter;
    }

    /**
     * Set sujetNewsletter
     *
     * @param string $sujetNewsletter
     * @return Newsletter
     */
    public function setSujetNewsletter($sujetNewsletter)
    {
        $this->sujetNewsletter = $sujetNewsletter;
    
        return $this;
    }

    /**
     * Get sujetNewsletter
     *
     * @return string 
     */
    public function getSujetNewsletter()
    {
        return $this->sujetNewsletter;
    }

    /**
     * Set bodyNewsletter
     *
     * @param string $bodyNewsletter
     * @return Newsletter
     */
    public function setBodyNewsletter($bodyNewsletter)
    {
        $this->bodyNewsletter = $bodyNewsletter;
    
        return $this;
    }

    /**
     * Get bodyNewsletter
     *
     * @return string 
     */
    public function getBodyNewsletter()
    {
        return $this->bodyNewsletter;
    }

    /**
     * Set dateNewsletter
     *
     * @param \DateTime $dateNewsletter
     * @return Newsletter
     */
    public function setDateNewsletter($dateNewsletter)
    {
        $this->dateNewsletter = $dateNewsletter;
    
        return $this;
    }

    /**
     * Get dateNewsletter
     *
     * @return \DateTime 
     */
    public function getDateNewsletter()
    {
        return $this->dateNewsletter;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Newsletter
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
}
