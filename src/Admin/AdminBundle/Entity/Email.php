<?php 

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 */
class Email
{
    /**
     * @var integer
     */
    private $idEmail;

    /**
     * @var string
     */
    private $adresseEmail;

    /**
     * @var integer
     */
    private $defaultEmail;

    /**
     * @var \Admin\AdminBundle\Entity\Projet
     */
    private $idProjet;


    /**
     * Get idEmail
     *
     * @return integer 
     */
    public function getIdEmail()
    {
        return $this->idEmail;
    }

    /**
     * Set adresseEmail
     *
     * @param string $adresseEmail
     * @return Email
     */
    public function setAdresseEmail($adresseEmail)
    {
        $this->adresseEmail = $adresseEmail;
    
        return $this;
    }

    /**
     * Get adresseEmail
     *
     * @return string 
     */
    public function getAdresseEmail()
    {
        return $this->adresseEmail;
    }

    /**
     * Set defaultEmail
     *
     * @param integer $defaultEmail
     * @return Email
     */
    public function setDefaultEmail($defaultEmail)
    {
        $this->defaultEmail = $defaultEmail;
    
        return $this;
    }

    /**
     * Get defaultEmail
     *
     * @return integer 
     */
    public function getDefaultEmail()
    {
        return $this->defaultEmail;
    }

    /**
     * Set idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Email
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
