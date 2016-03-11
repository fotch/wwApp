<?php

namespace DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DashboardBundle\Form\Type\AlimentType;

Class AlimentController extends Controller
{

    public function addAction()
    {
        $aliment = null;
        $form = $this->createForm(AlimentType::class, $aliment);
        return $this->render('DashboardBundle:Aliment:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('DashboardBundle:Aliment');

        $aliment = $repository->getAll();

        return $this->render('DashboardBundle:Aliment:list.html.twig', array(
            'aliments' => $aliment
        ));
    }

    public function getCategory()
    {

    }

    public function editAction()
    {
    }

}