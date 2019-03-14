<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'test', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
            '/question' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, null, null, false, false, null]],
            '/temp' => [[['_route' => 'test_temp', '_controller' => 'App\\Controller\\MainController::temp'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/question/(?'
                        .'|([^/]++)(*:28)'
                        .'|new(*:38)'
                        .'|([^/]++)(?'
                            .'|(*:56)'
                            .'|/edit(*:68)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            28 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            38 => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], [], null, null, false, false, null]],
            56 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], null, null, false, true, null]],
            68 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], null, null, false, false, null]],
        ];
    }
}
