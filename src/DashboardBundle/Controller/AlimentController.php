<?php

namespace DashboardBundle\Controller;

use DashboardBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DashboardBundle\Form\Type\AlimentType;
use DashboardBundle\Entity\Aliment;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

Class AlimentController extends Controller
{

    public function createAction(Request $request)
    {
        $aliment = null;
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(AlimentType::class, new Aliment());

        $form->handleRequest($request);

        if($request->isMethod('post') && $form->isValid()) {
            $data = $form->getData();

            var_dump($data); die;
        }
        return $this->render('DashboardBundle:Aliment:create.html.twig', array(
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
            $quantityType = $value->getQuantity()->getType();
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