<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller{

    public function indexAction(){
       
        return $this->render('AdminAdminBundle:Utilisateur:index.html.twig');
    }
    
}
