<?php

namespace ContainerPAGz1mN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKmom03ControllerService extends Caas23_KernelDevDebugContainer
{
    /**
     * Gets the public 'Caas23\Controller\Kmom03Controller' shared autowired service.
     *
     * @return \Caas23\Controller\Kmom03Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Kmom03Controller.php';

        $container->services['Caas23\\Controller\\Kmom03Controller'] = $instance = new \Caas23\Controller\Kmom03Controller();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('Caas23\\Controller\\Kmom03Controller', $container));

        return $instance;
    }
}
