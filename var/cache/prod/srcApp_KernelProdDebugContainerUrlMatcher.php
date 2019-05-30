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
            '/attribute' => [[['_route' => 'attribute_index', '_controller' => 'App\\Controller\\AttributeController::index'], null, ['GET' => 0], null, true, false, null]],
            '/attribute/new' => [[['_route' => 'attribute_new', '_controller' => 'App\\Controller\\AttributeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/group/new/simple' => [[['_route' => 'group_new_simple', '_controller' => 'App\\Controller\\GroupController::newSimple'], null, ['POST' => 0], null, false, false, null]],
            '/group/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['POST' => 0], null, false, false, null]],
            '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
            '/questions' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/question/new/save' => [[['_route' => 'question_new_save', '_controller' => 'App\\Controller\\QuestionController::newSave'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/tests' => [[['_route' => 'test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, false, false, null]],
            '/test/new' => [[['_route' => 'test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
            '/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/attribute/([^/]++)(?'
                        .'|/edit(*:34)'
                        .'|(*:41)'
                    .')'
                    .'|/group/([^/]++)(?'
                        .'|/edit(*:72)'
                        .'|(*:79)'
                    .')'
                    .'|/question/([^/]++)(?'
                        .'|(*:108)'
                        .'|/(?'
                            .'|e(?'
                                .'|xample(*:130)'
                                .'|dit(*:141)'
                            .')'
                            .'|copy(*:154)'
                        .')'
                        .'|(*:163)'
                    .')'
                    .'|/test/([^/]++)(?'
                        .'|(*:189)'
                        .'|/(?'
                            .'|e(?'
                                .'|xample(*:211)'
                                .'|dit(*:222)'
                            .')'
                            .'|report(*:237)'
                            .'|copy(*:249)'
                        .')'
                        .'|(*:258)'
                    .')'
                    .'|/participation/([^/]++)/(?'
                        .'|test/([^/]++)(*:307)'
                        .'|end(*:318)'
                    .')'
                    .'|/([^/]++)/(?'
                        .'|edit(*:344)'
                        .'|delete(*:358)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            34 => [[['_route' => 'attribute_edit', '_controller' => 'App\\Controller\\AttributeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            41 => [[['_route' => 'attribute_delete', '_controller' => 'App\\Controller\\AttributeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            72 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
            79 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            108 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            130 => [[['_route' => 'question_show_example', '_controller' => 'App\\Controller\\QuestionController::showExample'], ['id'], ['GET' => 0], null, false, false, null]],
            141 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            154 => [[['_route' => 'question_copy', '_controller' => 'App\\Controller\\QuestionController::copy'], ['id'], ['GET' => 0], null, false, false, null]],
            163 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            189 => [[['_route' => 'test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            211 => [[['_route' => 'show_test_example', '_controller' => 'App\\Controller\\TestController::showExample'], ['id'], ['GET' => 0], null, false, false, null]],
            222 => [[['_route' => 'test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            237 => [[['_route' => 'test_report', '_controller' => 'App\\Controller\\TestController::generateReport'], ['id'], null, null, false, false, null]],
            249 => [[['_route' => 'test_copy', '_controller' => 'App\\Controller\\TestController::copy'], ['id'], ['GET' => 0], null, false, false, null]],
            258 => [[['_route' => 'test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            307 => [[['_route' => 'test_new_start', '_controller' => 'App\\Controller\\TestController::newStart'], ['testPart', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            318 => [[['_route' => 'test_end', '_controller' => 'App\\Controller\\TestController::newEnd'], ['testPart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            344 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            358 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        ];
    }
}
