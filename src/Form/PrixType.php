<?php

namespace App\Form;

use App\Entity\Prix;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrixType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant_ht', NumberType::class, [
                'label' => 'Prix unitaire HT (€/m²)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 5.00',
                    'step' => '0.01',
                    'min' => '0',
                    'id' => 'prix_montant_ht',
                ],
                'required' => true,
                'html5' => true,
            ])
            ->add('remise', NumberType::class, [
                'label' => 'Remise (€)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 100.00',
                    'step' => '0.01',
                    'min' => '0',
                    'id' => 'prix_remise',
                ],
                'required' => false,
                'html5' => true,
            ])
            ->add('tva', ChoiceType::class, [
                'label' => 'TVA (%)',
                'choices' => [
                    '0%' => '0',
                    '5.5%' => '5.5',
                    '10%' => '10',
                    '20%' => '20',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'prix_tva',
                ],
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prix::class,
        ]);
    }
}
