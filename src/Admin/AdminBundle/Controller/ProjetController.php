<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller{

    public function indexAction(){
        
        return $this->render('AdminAdminBundle:Projet:index.html.twig');
    }
    
}
