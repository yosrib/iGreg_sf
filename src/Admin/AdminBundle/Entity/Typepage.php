<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typepage
 */
class Typepage
{
    /**
     * @var integer
     */
    private $idTypepage;

    /**
     * @var string
     */
    private $nomTypepage;


    /**
     * Get idTypepage
     *
     * @return integer 
     */
    public function getIdTypepage()
    {
        return $this->idTypepage;
    }

    /**
     * Set nomTypepage
     *
     * @param string $nomTypepage
     * @return Typepage
     */
    public function setNomTypepage($nomTypepage)
    {
        $this->nomTypepage = $nomTypepage;
    
        return $this;
    }

    /**
     * Get nomTypepage
     *
     * @return string 
     */
    public function getNomTypepage()
    {
        return $this->nomTypepage;
    }
}
