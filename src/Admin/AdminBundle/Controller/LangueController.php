<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Admin\AdminBundle\Entity\Langue;

class LangueController extends Controller{

    public function indexAction(){
        $langue =   new Langue();
        //$repository = $this->getDoctrine()->getRepository('AdminAdminBundle:Langue');
        //$allClient = $repository->find("fr");print_r($allClient);exit;
        return $this->render('AdminAdminBundle:Projet:index.html.twig');
    }
    
}
