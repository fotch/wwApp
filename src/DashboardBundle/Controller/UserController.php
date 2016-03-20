<?php

namespace DashboardBundle\Controller;

use DashboardBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{

    public function indexAction()
    {
        $user =  $this->get('security.context')->getToken()->getUser();

        dump($user); die;

        return $this->render('DashboardBundle:Includes:header.html.twig');
    }

}