<?php

namespace ContainerKZBbd7Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_ContainerRepositoryFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ContainerRepositoryFactory.php';

        return $container->privates['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\BlogPostRepository' => ['privates', 'App\\Repository\\BlogPostRepository', 'getBlogPostRepositoryService', true],
            'App\\Repository\\SensorAlertsRepository' => ['privates', 'App\\Repository\\SensorAlertsRepository', 'getSensorAlertsRepositoryService', true],
            'App\\Repository\\SensorDetailRepository' => ['privates', 'App\\Repository\\SensorDetailRepository', 'getSensorDetailRepositoryService', true],
            'App\\Repository\\SensorMeasurementRepository' => ['privates', 'App\\Repository\\SensorMeasurementRepository', 'getSensorMeasurementRepositoryService', true],
        ], [
            'App\\Repository\\BlogPostRepository' => '?',
            'App\\Repository\\SensorAlertsRepository' => '?',
            'App\\Repository\\SensorDetailRepository' => '?',
            'App\\Repository\\SensorMeasurementRepository' => '?',
        ]));
    }
}
