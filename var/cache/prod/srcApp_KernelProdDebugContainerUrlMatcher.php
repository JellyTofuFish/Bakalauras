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
            '/attributes' => [[['_route' => 'attribute_index', '_controller' => 'App\\Controller\\AttributeController::index'], null, ['GET' => 0], null, false, false, null]],
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
            '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/passwordreset' => [[['_route' => 'user_reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/attribute/([^/]++)/edit(*:31)'
                    .'|/group/([^/]++)(?'
                        .'|/edit(*:61)'
                        .'|(*:68)'
                    .')'
                    .'|/question/([^/]++)(?'
                        .'|(*:97)'
                        .'|/(?'
                            .'|e(?'
                                .'|xample(*:118)'
                                .'|dit(*:129)'
                            .')'
                            .'|copy(*:142)'
                        .')'
                        .'|(*:151)'
                    .')'
                    .'|/test/([^/]++)(?'
                        .'|(*:177)'
                        .'|/(?'
                            .'|e(?'
                                .'|xample(*:199)'
                                .'|dit(*:210)'
                            .')'
                            .'|report(*:225)'
                            .'|copy(*:237)'
                        .')'
                        .'|(*:246)'
                    .')'
                    .'|/pa(?'
                        .'|rticipation/([^/]++)/(?'
                            .'|test/([^/]++)(*:298)'
                            .'|end(*:309)'
                        .')'
                        .'|sswordreset/([^/]++)(*:338)'
                    .')'
                    .'|/confirmation/([^/]++)(*:369)'
                    .'|/user/([^/]++)/(?'
                        .'|edit(*:399)'
                        .'|delete(*:413)'
                    .')'
                    .'|/(.*)(*:427)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            31 => [[['_route' => 'attribute_edit', '_controller' => 'App\\Controller\\AttributeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            61 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
            68 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            97 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            118 => [[['_route' => 'question_show_example', '_controller' => 'App\\Controller\\QuestionController::showExample'], ['id'], ['GET' => 0], null, false, false, null]],
            129 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            142 => [[['_route' => 'question_copy', '_controller' => 'App\\Controller\\QuestionController::copy'], ['id'], ['GET' => 0], null, false, false, null]],
            151 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            177 => [[['_route' => 'test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            199 => [[['_route' => 'show_test_example', '_controller' => 'App\\Controller\\TestController::showExample'], ['id'], ['GET' => 0], null, false, false, null]],
            210 => [[['_route' => 'test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            225 => [[['_route' => 'test_report', '_controller' => 'App\\Controller\\TestController::generateReport'], ['id'], null, null, false, false, null]],
            237 => [[['_route' => 'test_copy', '_controller' => 'App\\Controller\\TestController::copy'], ['id'], ['GET' => 0], null, false, false, null]],
            246 => [[['_route' => 'test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            298 => [[['_route' => 'test_new_start', '_controller' => 'App\\Controller\\TestController::newStart'], ['testPart', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            309 => [[['_route' => 'test_end', '_controller' => 'App\\Controller\\TestController::newEnd'], ['testPart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            338 => [[['_route' => 'user_reset_password_confirm', '_controller' => 'App\\Controller\\UserController::resetPasswordConfirm'], ['string'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            369 => [[['_route' => 'registration_confirm', '_controller' => 'App\\Controller\\UserController::newRegistrationConfirm'], ['string'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            399 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            413 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
            427 => [[['_route' => 'catch', '_controller' => 'App\\Controller\\MainController::catch'], ['any'], null, null, false, true, null]],
        ];
    }
}
