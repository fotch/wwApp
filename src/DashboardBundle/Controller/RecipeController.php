<?php
/**
 * Created by PhpStorm.
 * User: Farouk-Pc
 * Date: 18/03/2016
 * Time: 23:10
 */

namespace DashboardBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecipeController extends Controller
{

    public function createAction()
    {
        return $this->render('DashboardBundle:Recipe:create.html.twig');
    }

    public function listAction()
    {
        return $this->render('DashboardBundle:Recipe:list.html.twig');
    }

    public function showAction($id)
    {

    }

}