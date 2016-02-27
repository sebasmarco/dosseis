<?php

namespace Trab\AlimentoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlimentoBundle:Default:index.html.twig', array('name' => $name));
    }
}
