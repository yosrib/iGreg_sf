<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tel
 */
class Tel
{
    /**
     * @var integer
     */
    private $idTel;

    /**
     * @var integer
     */
    private $numTel;

    /**
     * @var string
     */
    private $typeTel;

    /**
     * @var integer
     */
    private $principaleTel;

    /**
     * @var \Admin\AdminBundle\Entity\Client
     */
    private $idClient;


    /**
     * Get idTel
     *
     * @return integer 
     */
    public function getIdTel()
    {
        return $this->idTel;
    }

    /**
     * Set numTel
     *
     * @param integer $numTel
     * @return Tel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    
        return $this;
    }

    /**
     * Get numTel
     *
     * @return integer 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set typeTel
     *
     * @param string $typeTel
     * @return Tel
     */
    public function setTypeTel($typeTel)
    {
        $this->typeTel = $typeTel;
    
        return $this;
    }

    /**
     * Get typeTel
     *
     * @return string 
     */
    public function getTypeTel()
    {
        return $this->typeTel;
    }

    /**
     * Set principaleTel
     *
     * @param integer $principaleTel
     * @return Tel
     */
    public function setPrincipaleTel($principaleTel)
    {
        $this->principaleTel = $principaleTel;
    
        return $this;
    }

    /**
     * Get principaleTel
     *
     * @return integer 
     */
    public function getPrincipaleTel()
    {
        return $this->principaleTel;
    }

    /**
     * Set idClient
     *
     * @param \Admin\AdminBundle\Entity\Client $idClient
     * @return Tel
     */
    public function setIdClient(\Admin\AdminBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return \Admin\AdminBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
