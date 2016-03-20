<?php
/**
 * Created by PhpStorm.
 * User: Farouk-Pc
 * Date: 19/03/2016
 * Time: 10:58
 */

namespace DashboardBundle\Controller;

use DashboardBundle\Form\Type\UserInformationType;
use DashboardBundle\Form\Type\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserInformationController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateAction(Request $request)
    {
        // Get current user
        $user = $this->get('security.token_storage')->getToken()->getUser();
        // Get the manager
        $em = $this->getDoctrine()->getManager();

        /**************************/
        /*       User Accout      */
        /**************************/
        // Get user id
        $user_id = $user->getId();
        // get user account
        $userRepository = $em->getRepository('DashboardBundle:User')->findById($user_id);
        $user_account = $userRepository[0];
        // Create user form
        $form_account = $this->createForm(UserType::class, $user_account);

        // handle Submit (POST)
        $form_account->handleRequest($request);
        if ($form_account->isSubmitted() && $form_account->isValid()) {
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // Save user information
            $em->persist($user_account);
            $em->flush();
        }

        /**************************/
        /*    User Information    */
        /**************************/

        // Get user information id
        $userInformation_id = $user->getUserInformation()->getId();

        // Get user information
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('DashboardBundle:UserInformation')->findById($userInformation_id);
        $user_information = $repository[0];
        $form_information = $this->createForm(UserInformationType::class, $user_information);

        // handle Submit (POST)
        $form_information->handleRequest($request);
        if ($form_information->isSubmitted() && $form_information->isValid()) {
            // Save user information
            $em->persist($user_information);
            $em->flush();
        }

        // return user and user information
        return $this->render('DashboardBundle:UserInformation:update.html.twig', array(
            'formInformation' => $form_information->createView(),
            'formAccount'     => $form_account->createView()
        ));
    }
}