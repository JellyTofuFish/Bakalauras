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
        'test' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
        'question_delete' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'question_index' => [[], ['_controller' => 'App\\Controller\\QuestionController::index'], [], [['text', '/question']], [], []],
        'question_new' => [[], ['_controller' => 'App\\Controller\\QuestionController::new'], [], [['text', '/question/new']], [], []],
        'question_show' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'question_edit' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/question']], [], []],
        'test_temp' => [[], ['_controller' => 'App\\Controller\\MainController::temp'], [], [['text', '/temp']], [], []],
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
