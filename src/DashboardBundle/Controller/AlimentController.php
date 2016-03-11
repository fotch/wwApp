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

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('DashboardBundle:Aliment');
        $aliment = $repository->getAll();

        foreach($aliment as $key => $value) {
            $categoryName = $value->getCategory()->getName();
            //$quantityType = $value->getQuantity()->getType();
        }

        //var_dump($aliment); die;
        return $this->render('DashboardBundle:Aliment:list.html.twig', array(
            'aliments' => $aliment
        ));
    }

    public function editAction()
    {
    }

}