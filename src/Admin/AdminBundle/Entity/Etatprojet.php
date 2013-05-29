<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatprojet
 */
class Etatprojet
{
    /**
     * @var integer
     */
    private $idEtatprojet;

    /**
     * @var string
     */
    private $libelleEtatprojet;


    /**
     * Get idEtatprojet
     *
     * @return integer 
     */
    public function getIdEtatprojet()
    {
        return $this->idEtatprojet;
    }

    /**
     * Set libelleEtatprojet
     *
     * @param string $libelleEtatprojet
     * @return Etatprojet
     */
    public function setLibelleEtatprojet($libelleEtatprojet)
    {
        $this->libelleEtatprojet = $libelleEtatprojet;
    
        return $this;
    }

    /**
     * Get libelleEtatprojet
     *
     * @return string 
     */
    public function getLibelleEtatprojet()
    {
        return $this->libelleEtatprojet;
    }
}
