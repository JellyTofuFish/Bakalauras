<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class MainController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(AuthenticationUtils $authenticationUtils)
    {
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('main/index.html.twig', [
                'last_username' => $lastUsername,
        ]);
    }


}
