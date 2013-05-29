<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('front_front_homepage', new Route('/hello/{name}', array(
    '_controller' => 'FrontFrontBundle:Default:index',
)));

return $collection;
