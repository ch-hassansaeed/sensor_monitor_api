<?php

namespace ContainerKZBbd7Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_JmsHandlerRegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'fos_rest.serializer.jms_handler_registry' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSHandlerRegistryV2
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'rest-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'JMSHandlerRegistryV2.php';

        return $container->services['fos_rest.serializer.jms_handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistryV2(($container->privates['fos_rest.serializer.jms_handler_registry.inner'] ?? $container->load('getFosRest_Serializer_JmsHandlerRegistry_InnerService')));
    }
}
