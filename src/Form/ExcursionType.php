<?php

namespace App\Form;

use App\Entity\Excursion;
use App\Entity\Excursioncategorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle')
            ->add('description')
            ->add('programme')
            ->add('ville')
            ->add('prix')
            ->add('excursioncategorie', EntityType::class,
                [
                    'class' => Excursioncategorie::class,
                    'choice_label' => 'libelle',
                    'required' => true,
                ])
            ->add('excursionimages', CollectionType::class, [
                'entry_type' => ExcursionimageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'required' => false,
                'label'=>false,
                'by_reference' => false,
                'disabled' => false,
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excursion::class,
        ]);
    }
}
