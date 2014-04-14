<?php

namespace Recrutement\MyDashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DashboardController extends Controller{

    public function welcomeAction() {
        
        return $this->render("RecrutementMyDashboardBundle:Dashboard:welcome.html.twig");
    }
}



