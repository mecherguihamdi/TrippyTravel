<?php

namespace App\Form;

use App\Entity\Maisonshotes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaisonshotesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('libelle')
            ->add('capacite')
            ->add('localisation')
            ->add('proprietaire')
            ->add('prix')
            ->add('nbrChambres')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maisonshotes::class,
        ]);
    }
}
