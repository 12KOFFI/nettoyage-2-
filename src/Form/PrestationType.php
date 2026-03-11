<?php

namespace App\Form;

use App\Entity\Prestation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code_prestation')
            ->add('libelle')
            ->add('description')
            ->add('types_local', ChoiceType::class, [
                'label' => 'Types de locaux associés',
                'choices' => [
                    'Bureaux' => 'bureaux',
                    'Immeuble' => 'immeuble',
                    'Appartement et Maison' => 'appartement et maison',
                    'Commerce' => 'commerce',
                    'Entrepôt' => 'entrepot',
                    'Chantier' => 'chantier',
                    'Industriel' => 'industriel',
                    'Autre' => 'autre',
                ],
                'expanded' => true,
                'multiple' => true,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prestation::class,
        ]);
    }
}
