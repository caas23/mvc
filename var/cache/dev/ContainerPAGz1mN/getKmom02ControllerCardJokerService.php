<?php

namespace ContainerPAGz1mN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKmom02ControllerCardJokerService extends Caas23_KernelDevDebugContainer
{
    /**
     * Gets the public 'Caas23\Controller\Kmom02ControllerCardJoker' shared autowired service.
     *
     * @return \Caas23\Controller\Kmom02ControllerCardJoker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Kmom02ControllerCardJoker.php';

        $container->services['Caas23\\Controller\\Kmom02ControllerCardJoker'] = $instance = new \Caas23\Controller\Kmom02ControllerCardJoker();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('Caas23\\Controller\\Kmom02ControllerCardJoker', $container));

        return $instance;
    }
}
