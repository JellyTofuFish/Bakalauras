<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }
    /**
     * @Route("/", name="test")
     */
    public function index()
    {
//        $url2 = $this->router->generate(
//            'question_show',[
//        'slug' => 901]);
        $url2 = $this->generateUrl('test_temp', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $url = $this->generateUrl(
            'test_temp'
        );
        $webPath = $this->get('kernel')->getProjectDir() . '/public';

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'url' => $url,
            'url2' => $url2,
            "app" => $webPath
        ]);
    }

    public function temp()
    {
        return $this->render('main/templete.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
