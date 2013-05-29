<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientnewsletter
 */
class Clientnewsletter
{
    /**
     * @var integer
     */
    private $idClientnewsletter;

    /**
     * @var integer
     */
    private $actifClientNewsletter;

    /**
     * @var string
     */
    private $emailClientnewsletter;

    /**
     * @var \Admin\AdminBundle\Entity\Langue
     */
    private $isoLangue;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;


    /**
     * Get idClientnewsletter
     *
     * @return integer 
     */
    public function getIdClientnewsletter()
    {
        return $this->idClientnewsletter;
    }

    /**
     * Set actifClientNewsletter
     *
     * @param integer $actifClientNewsletter
     * @return Clientnewsletter
     */
    public function setActifClientNewsletter($actifClientNewsletter)
    {
        $this->actifClientNewsletter = $actifClientNewsletter;
    
        return $this;
    }

    /**
     * Get actifClientNewsletter
     *
     * @return integer 
     */
    public function getActifClientNewsletter()
    {
        return $this->actifClientNewsletter;
    }

    /**
     * Set emailClientnewsletter
     *
     * @param string $emailClientnewsletter
     * @return Clientnewsletter
     */
    public function setEmailClientnewsletter($emailClientnewsletter)
    {
        $this->emailClientnewsletter = $emailClientnewsletter;
    
        return $this;
    }

    /**
     * Get emailClientnewsletter
     *
     * @return string 
     */
    public function getEmailClientnewsletter()
    {
        return $this->emailClientnewsletter;
    }

    /**
     * Set isoLangue
     *
     * @param \Admin\AdminBundle\Entity\Langue $isoLangue
     * @return Clientnewsletter
     */
    public function setIsoLangue(\Admin\AdminBundle\Entity\Langue $isoLangue = null)
    {
        $this->isoLangue = $isoLangue;
    
        return $this;
    }

    /**
     * Get isoLangue
     *
     * @return \Admin\AdminBundle\Entity\Langue 
     */
    public function getIsoLangue()
    {
        return $this->isoLangue;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Clientnewsletter
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
