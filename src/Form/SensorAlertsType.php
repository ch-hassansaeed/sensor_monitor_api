<?php

namespace App\Form;

use App\Entity\SensorAlerts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SensorAlertsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('co_alert_level')
            ->add('startTime')
            ->add('endTime')
            ->add('row_insertion_datetime')
            ->add('sensor_detail')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SensorAlerts::class,
        ]);
    }
}
