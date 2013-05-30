<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller{

    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository('AdminAdminBundle:Client');
        $allClient = $repository->findAll();
        //print_r($allClient);exit;
        return $this->render('AdminAdminBundle:Client:index.html.twig', array("allClient" => $allClient));
    }
    

}
