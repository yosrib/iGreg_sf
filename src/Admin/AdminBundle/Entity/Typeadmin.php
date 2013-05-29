<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeadmin
 */
class Typeadmin
{
    /**
     * @var integer
     */
    private $idTypeadmin;

    /**
     * @var string
     */
    private $libelleTypeadmin;


    /**
     * Get idTypeadmin
     *
     * @return integer 
     */
    public function getIdTypeadmin()
    {
        return $this->idTypeadmin;
    }

    /**
     * Set libelleTypeadmin
     *
     * @param string $libelleTypeadmin
     * @return Typeadmin
     */
    public function setLibelleTypeadmin($libelleTypeadmin)
    {
        $this->libelleTypeadmin = $libelleTypeadmin;
    
        return $this;
    }

    /**
     * Get libelleTypeadmin
     *
     * @return string 
     */
    public function getLibelleTypeadmin()
    {
        return $this->libelleTypeadmin;
    }
}
