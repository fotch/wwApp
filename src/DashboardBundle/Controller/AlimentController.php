<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class AlimentController extends Controller
{

    public function addAction()
    {
        return $this->render('DashboardBundle:Aliment:add.html.twig');
    }

    public function listAliment()
    {
        return false;
    }

    public function editAliment()
    {
        return false;
    }

}