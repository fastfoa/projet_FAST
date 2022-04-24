<?php

namespace ContainerXlQpG9Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AVtYfA0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AVtYfA0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AVtYfA0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'app' => ['privates', '.errored..service_locator.AVtYfA0.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.AVtYfA0": it references class "App\\Entity\\User" but no such service exists.'],
            'session' => ['privates', '.errored..service_locator.AVtYfA0.App\\Entity\\Session', NULL, 'Cannot autowire service ".service_locator.AVtYfA0": it references class "App\\Entity\\Session" but no such service exists.'],
        ], [
            'app' => 'App\\Entity\\User',
            'session' => 'App\\Entity\\Session',
        ]);
    }
}
