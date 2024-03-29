<?php

namespace ContainerBkAyHsS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountOrderControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccountOrderController' shared autowired service.
     *
     * @return \App\Controller\AccountOrderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccountOrderController.php';

        $container->services['App\\Controller\\AccountOrderController'] = $instance = new \App\Controller\AccountOrderController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AccountOrderController', $container));

        return $instance;
    }
}
