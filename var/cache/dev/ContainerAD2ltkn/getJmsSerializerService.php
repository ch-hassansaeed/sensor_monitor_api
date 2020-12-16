<?php

namespace ContainerAD2ltkn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SerializerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AdvancedMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MetadataFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'DriverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'LazyLoadingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'FileCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphNavigator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphNavigator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Construction'.\DIRECTORY_SEPARATOR.'ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Construction'.\DIRECTORY_SEPARATOR.'DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Construction'.\DIRECTORY_SEPARATOR.'UnserializeObjectConstructor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Accessor'.\DIRECTORY_SEPARATOR.'AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Accessor'.\DIRECTORY_SEPARATOR.'DefaultAccessorStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'LazyEventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphNavigator'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'JsonSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'XmlSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'JsonDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'ContextFactory'.\DIRECTORY_SEPARATOR.'ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Parser.php';

        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'metadata_driver' => ['services', 'jms_serializer.metadata_driver', 'getJmsSerializer_MetadataDriverService', true],
        ], [
            'metadata_driver' => '?',
        ]), 'metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer')));
        $b = ($container->services['fos_rest.serializer.jms_handler_registry'] ?? $container->load('getFosRest_Serializer_JmsHandlerRegistryService'));
        $c = new \JMS\Serializer\Accessor\DefaultAccessorStrategy();
        $d = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
            'jms_serializer.stopwatch_subscriber' => ['privates', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService', true],
        ], [
            'jms_serializer.doctrine_proxy_subscriber' => '?',
            'jms_serializer.stopwatch_subscriber' => '?',
        ]));
        $d->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => NULL], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Persistence\\Proxy'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 5 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 6 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Persistence\\Proxy'], 7 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 8 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'ProxyManager\\Proxy\\LazyLoadingInterface']], 'serializer.post_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'], 1 => NULL, 2 => NULL, 3 => NULL]]]);
        $e = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $e->setOptions(1216);
        $f = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
        $f->setFormatOutput(true);
        $g = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
        $g->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? $container->getDoctrineService()), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $c, $d, NULL), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $c, $d, NULL)], ['json' => $e, 'xml' => $f], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
