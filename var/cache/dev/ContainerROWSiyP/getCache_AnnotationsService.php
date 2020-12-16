<?php

namespace ContainerROWSiyP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AnnotationsService extends App_KernelDevContainer
{
    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('CGx0+SI6lB', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools'), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
