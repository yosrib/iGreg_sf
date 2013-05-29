<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var integer
     */
    private $idClient;

    /**
     * @var string
     */
    private $nomClient;

    /**
     * @var string
     */
    private $prenomClient;

    /**
     * @var string
     */
    private $emailClient;

    /**
     * @var string
     */
    private $adresseClient;

    /**
     * @var string
     */
    private $paysClient;

    /**
     * @var string
     */
    private $codepostalClient;

    /**
     * @var integer
     */
    private $logitudeClient;

    /**
     * @var integer
     */
    private $lattidudeClient;

    /**
     * @var string
     */
    private $villeClient;


    /**
     * Get idClient
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
    
        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string 
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;
    
        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string 
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set emailClient
     *
     * @param string $emailClient
     * @return Client
     */
    public function setEmailClient($emailClient)
    {
        $this->emailClient = $emailClient;
    
        return $this;
    }

    /**
     * Get emailClient
     *
     * @return string 
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }

    /**
     * Set adresseClient
     *
     * @param string $adresseClient
     * @return Client
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;
    
        return $this;
    }

    /**
     * Get adresseClient
     *
     * @return string 
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Set paysClient
     *
     * @param string $paysClient
     * @return Client
     */
    public function setPaysClient($paysClient)
    {
        $this->paysClient = $paysClient;
    
        return $this;
    }

    /**
     * Get paysClient
     *
     * @return string 
     */
    public function getPaysClient()
    {
        return $this->paysClient;
    }

    /**
     * Set codepostalClient
     *
     * @param string $codepostalClient
     * @return Client
     */
    public function setCodepostalClient($codepostalClient)
    {
        $this->codepostalClient = $codepostalClient;
    
        return $this;
    }

    /**
     * Get codepostalClient
     *
     * @return string 
     */
    public function getCodepostalClient()
    {
        return $this->codepostalClient;
    }

    /**
     * Set logitudeClient
     *
     * @param integer $logitudeClient
     * @return Client
     */
    public function setLogitudeClient($logitudeClient)
    {
        $this->logitudeClient = $logitudeClient;
    
        return $this;
    }

    /**
     * Get logitudeClient
     *
     * @return integer 
     */
    public function getLogitudeClient()
    {
        return $this->logitudeClient;
    }

    /**
     * Set lattidudeClient
     *
     * @param integer $lattidudeClient
     * @return Client
     */
    public function setLattidudeClient($lattidudeClient)
    {
        $this->lattidudeClient = $lattidudeClient;
    
        return $this;
    }

    /**
     * Get lattidudeClient
     *
     * @return integer 
     */
    public function getLattidudeClient()
    {
        return $this->lattidudeClient;
    }

    /**
     * Set villeClient
     *
     * @param string $villeClient
     * @return Client
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;
    
        return $this;
    }

    /**
     * Get villeClient
     *
     * @return string 
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }
}
