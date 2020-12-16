<?php

namespace Container0YaAbUU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_SerializationGraphNavigatorFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.serialization_graph_navigator_factory' shared service.
     *
     * @return \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphNavigator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphNavigator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Accessor'.\DIRECTORY_SEPARATOR.'AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Accessor'.\DIRECTORY_SEPARATOR.'DefaultAccessorStrategy.php';

        return $container->privates['jms_serializer.serialization_graph_navigator_factory'] = new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory(($container->privates['jms_serializer.metadata_factory'] ?? $container->load('getJmsSerializer_MetadataFactoryService')), ($container->services['fos_rest.serializer.jms_handler_registry'] ?? $container->load('getFosRest_Serializer_JmsHandlerRegistryService')), ($container->privates['jms_serializer.accessor_strategy.default'] ?? ($container->privates['jms_serializer.accessor_strategy.default'] = new \JMS\Serializer\Accessor\DefaultAccessorStrategy())), ($container->privates['jms_serializer.event_dispatcher'] ?? $container->load('getJmsSerializer_EventDispatcherService')), NULL);
    }
}
