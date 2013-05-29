<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 */
class Langue
{
    /**
     * @var string
     */
    private $isoLangue;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idActualite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idGallerie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idProjet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idPage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idPhoto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idActualite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idGallerie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idProjet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPhoto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get isoLangue
     *
     * @return string 
     */
    public function getIsoLangue()
    {
        return $this->isoLangue;
    }

    /**
     * Add idActualite
     *
     * @param \Admin\AdminBundle\Entity\Actualite $idActualite
     * @return Langue
     */
    public function addIdActualite(\Admin\AdminBundle\Entity\Actualite $idActualite)
    {
        $this->idActualite[] = $idActualite;
    
        return $this;
    }

    /**
     * Remove idActualite
     *
     * @param \Admin\AdminBundle\Entity\Actualite $idActualite
     */
    public function removeIdActualite(\Admin\AdminBundle\Entity\Actualite $idActualite)
    {
        $this->idActualite->removeElement($idActualite);
    }

    /**
     * Get idActualite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * Add idGallerie
     *
     * @param \Admin\AdminBundle\Entity\Gallerie $idGallerie
     * @return Langue
     */
    public function addIdGallerie(\Admin\AdminBundle\Entity\Gallerie $idGallerie)
    {
        $this->idGallerie[] = $idGallerie;
    
        return $this;
    }

    /**
     * Remove idGallerie
     *
     * @param \Admin\AdminBundle\Entity\Gallerie $idGallerie
     */
    public function removeIdGallerie(\Admin\AdminBundle\Entity\Gallerie $idGallerie)
    {
        $this->idGallerie->removeElement($idGallerie);
    }

    /**
     * Get idGallerie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdGallerie()
    {
        return $this->idGallerie;
    }

    /**
     * Add idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     * @return Langue
     */
    public function addIdProjet(\Admin\AdminBundle\Entity\Projet $idProjet)
    {
        $this->idProjet[] = $idProjet;
    
        return $this;
    }

    /**
     * Remove idProjet
     *
     * @param \Admin\AdminBundle\Entity\Projet $idProjet
     */
    public function removeIdProjet(\Admin\AdminBundle\Entity\Projet $idProjet)
    {
        $this->idProjet->removeElement($idProjet);
    }

    /**
     * Get idProjet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Add idPage
     *
     * @param \Admin\AdminBundle\Entity\Page $idPage
     * @return Langue
     */
    public function addIdPage(\Admin\AdminBundle\Entity\Page $idPage)
    {
        $this->idPage[] = $idPage;
    
        return $this;
    }

    /**
     * Remove idPage
     *
     * @param \Admin\AdminBundle\Entity\Page $idPage
     */
    public function removeIdPage(\Admin\AdminBundle\Entity\Page $idPage)
    {
        $this->idPage->removeElement($idPage);
    }

    /**
     * Get idPage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Add idPhoto
     *
     * @param \Admin\AdminBundle\Entity\Photo $idPhoto
     * @return Langue
     */
    public function addIdPhoto(\Admin\AdminBundle\Entity\Photo $idPhoto)
    {
        $this->idPhoto[] = $idPhoto;
    
        return $this;
    }

    /**
     * Remove idPhoto
     *
     * @param \Admin\AdminBundle\Entity\Photo $idPhoto
     */
    public function removeIdPhoto(\Admin\AdminBundle\Entity\Photo $idPhoto)
    {
        $this->idPhoto->removeElement($idPhoto);
    }

    /**
     * Get idPhoto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPhoto()
    {
        return $this->idPhoto;
    }
}
