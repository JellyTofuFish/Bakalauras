<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/group/new/simple' => [[['_route' => 'group_new_simple', '_controller' => 'App\\Controller\\GroupController::newSimple'], null, ['POST' => 0], null, false, false, null]],
            '/group/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['POST' => 0], null, false, false, null]],
            '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
            '/questions' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/question/new/save' => [[['_route' => 'question_new_save', '_controller' => 'App\\Controller\\QuestionController::newSave'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/tests' => [[['_route' => 'test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, false, false, null]],
            '/test/new' => [[['_route' => 'test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/group/([^/]++)(?'
                        .'|/edit(*:30)'
                        .'|(*:37)'
                    .')'
                    .'|/question/([^/]++)(?'
                        .'|(*:66)'
                        .'|/e(?'
                            .'|xample(*:84)'
                            .'|dit(*:94)'
                        .')'
                        .'|(*:102)'
                    .')'
                    .'|/test/([^/]++)(?'
                        .'|(*:128)'
                        .'|/(?'
                            .'|e(?'
                                .'|xample(*:150)'
                                .'|dit(*:161)'
                            .')'
                            .'|participation/([^/]++)/start(*:198)'
                        .')'
                        .'|(*:207)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            30 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
            37 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            66 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            84 => [[['_route' => 'question_show_example', '_controller' => 'App\\Controller\\QuestionController::showExample'], ['id'], ['GET' => 0], null, false, false, null]],
            94 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            102 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            128 => [[['_route' => 'test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            150 => [[['_route' => 'show_test_example', '_controller' => 'App\\Controller\\TestController::showExample'], ['id'], ['GET' => 0], null, false, false, null]],
            161 => [[['_route' => 'test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            198 => [[['_route' => 'test_new_start', '_controller' => 'App\\Controller\\TestController::newStart'], ['id', 'testPart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            207 => [[['_route' => 'test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
