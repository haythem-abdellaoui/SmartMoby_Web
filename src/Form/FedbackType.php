<?php

namespace App\Form;

use App\Entity\Evenment;
use App\Entity\Fedback;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class FedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('commentaire', TextType::class, [
                'label' => 'Commentaire',
                'required' => false,
                
                
            ])
            ->add('note' , IntegerType::class, [
                'label' => 'Note',
                'required' => false,
                
                
            ])
            
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fedback::class,
        ]);
    }
}
