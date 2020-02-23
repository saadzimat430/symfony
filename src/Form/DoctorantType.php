<?php

namespace App\Form;

use App\Entity\Doctorant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class DoctorantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CIN',TextType::class, [
                'label' => 'CIN: ',
            ])
            ->add('CNE',TextType::class, [
                'label' => 'CNE: ',
            ])
            ->add('DateNaissance',BirthdayType::class)
            ->add('LieuNaissance',TextType::class)
            ->add('Adresse',TextType::class)
            ->add('Telephone',TextType::class)
            ->add('Boursier', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Doctorant::class,
        ]);
    }
}
