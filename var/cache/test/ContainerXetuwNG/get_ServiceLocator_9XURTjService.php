<?php

namespace ContainerXetuwNG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9XURTjService extends Caas23_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.9XURTj_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9XURTj_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'covidRepository' => ['privates', 'Caas23\\Repository\\DeceasedCovidRepository', 'getDeceasedCovidRepositoryService', true],
            'generalRepository' => ['privates', 'Caas23\\Repository\\DeceasedGeneralRepository', 'getDeceasedGeneralRepositoryService', true],
        ], [
            'covidRepository' => 'Caas23\\Repository\\DeceasedCovidRepository',
            'generalRepository' => 'Caas23\\Repository\\DeceasedGeneralRepository',
        ]);
    }
}