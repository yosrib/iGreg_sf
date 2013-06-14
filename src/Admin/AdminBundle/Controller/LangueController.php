<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LangueController extends Controller{

    public function indexAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("select * from langue ");
        $statement->execute();
        $allLangue = $statement->fetchAll();

        return $this->render('AdminAdminBundle:Langue:index.html.twig', array('allLangue'=>$allLangue));
    }
    
}
