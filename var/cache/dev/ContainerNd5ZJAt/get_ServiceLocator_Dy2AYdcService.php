<?php

namespace ContainerNd5ZJAt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dy2AYdcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dy2AYdc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dy2AYdc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'idApp' => ['privates', '.errored..service_locator.dy2AYdc.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.dy2AYdc": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'idApp' => 'App\\Entity\\User',
        ]);
    }
}
