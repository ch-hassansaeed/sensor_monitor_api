<?php

namespace App\Form;

use App\Entity\SensorMeasurement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SensorMeasurementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('co_level')
            ->add('reading_datetime')
            ->add('row_insertion_datetime')
            ->add('sensor_detail')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SensorMeasurement::class,
        ]);
    }
}
