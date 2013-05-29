<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reseausosial
 */
class Reseausosial
{
    /**
     * @var integer
     */
    private $idResocial;

    /**
     * @var string
     */
    private $nomResocial;

    /**
     * @var string
     */
    private $urlResocial;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;


    /**
     * Get idResocial
     *
     * @return integer 
     */
    public function getIdResocial()
    {
        return $this->idResocial;
    }

    /**
     * Set nomResocial
     *
     * @param string $nomResocial
     * @return Reseausosial
     */
    public function setNomResocial($nomResocial)
    {
        $this->nomResocial = $nomResocial;
    
        return $this;
    }

    /**
     * Get nomResocial
     *
     * @return string 
     */
    public function getNomResocial()
    {
        return $this->nomResocial;
    }

    /**
     * Set urlResocial
     *
     * @param string $urlResocial
     * @return Reseausosial
     */
    public function setUrlResocial($urlResocial)
    {
        $this->urlResocial = $urlResocial;
    
        return $this;
    }

    /**
     * Get urlResocial
     *
     * @return string 
     */
    public function getUrlResocial()
    {
        return $this->urlResocial;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Reseausosial
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
