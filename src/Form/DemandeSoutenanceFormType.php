<?php

namespace App\Form;

use App\Entity\DemandeSoutenance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DemandeSoutenanceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDepot')
            ->add('Reponse')
            ->add('Lettre', FileType::class, ['label' => 'Lettre de demande de Soutenance (PDF file)'])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeSoutenance::class,
        ]);
    }
}
