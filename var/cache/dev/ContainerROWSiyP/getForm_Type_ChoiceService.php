<?php

namespace ContainerROWSiyP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_ChoiceService extends App_KernelDevContainer
{
    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($container->privates['form.choice_list_factory.cached'] ?? $container->load('getForm_ChoiceListFactory_CachedService')));
    }
}
