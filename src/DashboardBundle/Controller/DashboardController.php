<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{

    public function indexAction()
    {

        //$user = $usr= $this->get('security.context')->getToken()->getUser();

        //dump($user); die;
        return $this->render('DashboardBundle:Default:index.html.twig');
    }

}
