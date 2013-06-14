<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller{

    public function indexAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("select * from admin ");
        $statement->execute();
        $allUser = $statement->fetchAll();
        
        return $this->render('AdminAdminBundle:Utilisateur:index.html.twig', array('allUser'=> $allUser));
    }
    
}
