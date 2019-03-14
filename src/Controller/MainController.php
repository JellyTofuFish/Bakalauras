<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;

class MainController extends AbstractController
{

    private $routes = [];

    public function __construct(RouterInterface $router)
    {
        foreach ($router->getRouteCollection()->all() as $route_name => $route) {
            $this->routes[$route_name] = $route->getPath();
        }
    }
    /**
     * @Route("/t", name="test")
     */
    public function index()
    {
        $router = $this->get('router');
        $routes = $router->getRouteCollection();
//        foreach ($routes as $route) {
//            $this->convertController($route);
//        }

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            "routes" => $routes
        ]);
    }
    private function convertController(\Symfony\Component\Routing\Route $route)
    {
        $nameParser = $this->get('App\Controller\QuestionController');
        if ($route->hasDefault('_controller')) {
            try {
                $route->setDefault('_controller', $nameParser->build($route->getDefault('_controller')));
            } catch (\InvalidArgumentException $e) {
            }
        }
    }

    public function temp()
    {
        return $this->render('main/templete.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
