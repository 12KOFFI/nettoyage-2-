<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\DemandeDevis;
use App\Entity\Local;
use App\Entity\Prestation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandeDevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Champs Client
            ->add('client_nom', TextType::class, [
                'mapped' => false,
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Nom *'],
                'required' => true,
            ])
            ->add('client_prenom', TextType::class, [
                'mapped' => false,
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Prénom *'],
                'required' => true,
            ])
            ->add('client_email', EmailType::class, [
                'mapped' => false,
                'label' => 'Email',
                'attr' => ['placeholder' => 'Email *'],
                'required' => true,
            ])
            ->add('client_telephone', TelType::class, [
                'mapped' => false,
                'label' => 'Téléphone',
                'attr' => ['placeholder' => 'Téléphone *'],
                'required' => true,
            ])
            
            // Champs Local
            ->add('local_type', ChoiceType::class, [
                'mapped' => false,
                'label' => 'Type de local',
                'placeholder' => 'Type de local *',
                'choices' => [
                    'Bureaux' => 'bureaux',
                    'Immeuble' => 'immeuble',
                    'Commerce' => 'commerce',
                    'Entrepôt' => 'entrepot',
                    'Chantier' => 'chantier',
                    'Industriel' => 'industriel',
                    'Autre' => 'autre',
                ],
                'required' => true,
            ])
            ->add('local_ville', TextType::class, [
                'mapped' => false,
                'label' => 'Adresse du site à nettoyer',
                'attr' => ['placeholder' => 'Adresse du site à nettoyer *'],
                'required' => true,
            ])
            ->add('local_surface', IntegerType::class, [
                'mapped' => false,
                'label' => 'Surface (m²)',
                'attr' => ['placeholder' => 'Surface en m² *'],
                'required' => true,
            ])
            
            // Champs DemandeDevis
            ->add('prestation', EntityType::class, [
                'class' => Prestation::class,
                'choice_label' => 'libelle',
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'js-prestation-checkboxes'],
            ])
            ->add('prestation_autre', TextareaType::class, [
                'label' => 'Précisez votre besoin',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Décrivez la prestation souhaitée en détail...',
                    'rows' => 3,
                    'class' => 'form-control',
                ],
                'required' => false,
            ])
            ->add('frequence', ChoiceType::class, [
                'label' => 'Fréquence',
                'placeholder' => 'Fréquence souhaitée *',
                'choices' => [
                    'Ponctuel (une fois)' => 'ponctuel',
                    'Quotidien' => 'quotidien',
                    'Hebdomadaire' => 'hebdomadaire',
                    'Bi-hebdomadaire' => 'bi-hebdomadaire',
                    'Mensuel' => 'mensuel',
                    ' Autre' => 'Autre',
                ],
                'required' => true,
            ])
            ->add('creneau_horaire', ChoiceType::class, [
                'label' => 'Créneau horaire',
                'placeholder' => 'Créneau horaire préféré *',
                'choices' => [
                    'Matin (6h-12h)' => 'matin',
                    'Après-midi (12h-18h)' => 'apres-midi',
                    'Soir (18h-22h)' => 'soir',
                    'Nuit (22h-6h)' => 'nuit',
                    'Flexible' => 'flexible',
                ],
                'required' => true,
            ])
            ->add('details_specifiques', TextareaType::class, [
                'mapped' => false,
                'label' => 'Détails spécifiques',
                'attr' => [
                    'placeholder' => 'Décrivez votre besoin en détail (superficie, particularités, attentes spécifiques...)',
                    'rows' => 5,
                ],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeDevis::class,
        ]);
    }
}
