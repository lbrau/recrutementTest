<?php

namespace Recrutement\MyDashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RecrutementMyDashboardBundle:Default:index.html.twig', array('name' => $name));
    }
}
