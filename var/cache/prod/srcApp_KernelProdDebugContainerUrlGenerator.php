<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'attribute_index' => [[], ['_controller' => 'App\\Controller\\AttributeController::index'], [], [['text', '/attributes']], [], []],
        'attribute_new' => [[], ['_controller' => 'App\\Controller\\AttributeController::new'], [], [['text', '/attribute/new']], [], []],
        'attribute_edit' => [['id'], ['_controller' => 'App\\Controller\\AttributeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/attribute']], [], []],
        'group_new_simple' => [[], ['_controller' => 'App\\Controller\\GroupController::newSimple'], [], [['text', '/group/new/simple']], [], []],
        'group_new' => [[], ['_controller' => 'App\\Controller\\GroupController::new'], [], [['text', '/group/new']], [], []],
        'group_edit' => [['id'], ['_controller' => 'App\\Controller\\GroupController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], []],
        'group_delete' => [['id'], ['_controller' => 'App\\Controller\\GroupController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], []],
        'home_index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
        'question_index' => [[], ['_controller' => 'App\\Controller\\QuestionController::index'], [], [['text', '/questions']], [], []],
        'question_new' => [[], ['_controller' => 'App\\Controller\\QuestionController::new'], [], [['text', '/question/new']], [], []],
        'question_new_save' => [[], ['_controller' => 'App\\Controller\\QuestionController::newSave'], [], [['text', '/question/new/save']], [], []],
        'question_show' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'question_show_example' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::showExample'], [], [['text', '/example'], ['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'question_edit' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'question_delete' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'question_copy' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::copy'], [], [['text', '/copy'], ['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'test_index' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/tests']], [], []],
        'test_new' => [[], ['_controller' => 'App\\Controller\\TestController::new'], [], [['text', '/test/new']], [], []],
        'test_show' => [['id'], ['_controller' => 'App\\Controller\\TestController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], []],
        'show_test_example' => [['id'], ['_controller' => 'App\\Controller\\TestController::showExample'], [], [['text', '/example'], ['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], []],
        'test_new_start' => [['testPart', 'id'], ['_controller' => 'App\\Controller\\TestController::newStart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/test'], ['variable', '/', '[^/]++', 'testPart', true], ['text', '/participation']], [], []],
        'test_end' => [['testPart'], ['_controller' => 'App\\Controller\\TestController::newEnd'], [], [['text', '/end'], ['variable', '/', '[^/]++', 'testPart', true], ['text', '/participation']], [], []],
        'test_edit' => [['id'], ['_controller' => 'App\\Controller\\TestController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], []],
        'test_delete' => [['id'], ['_controller' => 'App\\Controller\\TestController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], []],
        'test_report' => [['id'], ['_controller' => 'App\\Controller\\TestController::generateReport'], [], [['text', '/report'], ['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], []],
        'test_copy' => [['id'], ['_controller' => 'App\\Controller\\TestController::copy'], [], [['text', '/copy'], ['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], []],
        'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/users']], [], []],
        'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
        'registration_confirm' => [['string'], ['_controller' => 'App\\Controller\\UserController::newRegistrationConfirm'], [], [['variable', '/', '[^/]++', 'string', true], ['text', '/confirmation']], [], []],
        'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        'user_reset_password' => [[], ['_controller' => 'App\\Controller\\UserController::resetPassword'], [], [['text', '/passwordreset']], [], []],
        'user_reset_password_confirm' => [['string'], ['_controller' => 'App\\Controller\\UserController::resetPasswordConfirm'], [], [['variable', '/', '[^/]++', 'string', true], ['text', '/passwordreset']], [], []],
        'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
        'catch' => [['any'], ['_controller' => 'App\\Controller\\MainController::catch'], ['any' => '.*'], [['variable', '/', '.*', 'any', true]], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
