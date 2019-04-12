<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{

//    /**
//     * @Route("/login", name="app_login")
//     */
//    public function login(AuthenticationUtils $authenticationUtils)
//    {
//        $lastUsername = $authenticationUtils->getLastUsername();
//        return $this->render('main/index.html.twig', [
//            'last_username' => $lastUsername,
//        ]);
//    }
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        // controller can be blank: it will never be executed!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
