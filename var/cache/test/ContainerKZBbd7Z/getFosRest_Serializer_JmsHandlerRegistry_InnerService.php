<?php

namespace ContainerKZBbd7Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_JmsHandlerRegistry_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'fos_rest.serializer.jms_handler_registry.inner' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'LazyHandlerRegistry.php';

        return $container->privates['fos_rest.serializer.jms_handler_registry.inner'] = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fos_rest.serializer.flatten_exception_handler' => ['privates', 'fos_rest.serializer.flatten_exception_handler', 'getFosRest_Serializer_FlattenExceptionHandlerService', true],
            'fos_rest.serializer.form_error_handler' => ['privates', 'fos_rest.serializer.form_error_handler', 'getFosRest_Serializer_FormErrorHandlerService', true],
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
        ], [
            'fos_rest.serializer.flatten_exception_handler' => '?',
            'fos_rest.serializer.form_error_handler' => '?',
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
        ]), [1 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Symfony\\Component\\ErrorHandler\\Exception\\FlattenException' => ['json' => [0 => 'fos_rest.serializer.flatten_exception_handler', 1 => 'serializeToJson'], 'xml' => [0 => 'fos_rest.serializer.flatten_exception_handler', 1 => 'serializeToXml']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorTojson']]], 2 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']], 'DateTimeInterface' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromJson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromXml']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']]]]);
    }
}
