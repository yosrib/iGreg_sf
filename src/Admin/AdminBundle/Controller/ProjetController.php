<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller{

    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository('AdminAdminBundle:Client');
        $allClient = $repository->findAll();
        print_r($allClient);exit;
        return $this->render('AdminAdminBundle:Projet:index.html.twig', array("allClient" => $allClient));
    }
    
    public function ProjetenatenteAction(){
        return $this->render('AdminAdminBundle:Projet:projeten.html.twig');
    }
}
