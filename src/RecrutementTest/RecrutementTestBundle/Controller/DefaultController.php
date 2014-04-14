<?php

namespace RecrutementTest\RecrutementTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RecrutementTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
