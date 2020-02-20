<?php

namespace App\Form;

use App\Entity\Parfum;
use App\Entity\Marque;
use App\Entity\Nez;
use App\Entity\NoteTete;
use App\Entity\NoteCoeur;
use App\Entity\NoteFond;
use App\Entity\FamilleOlfactive;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ParfumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class)
            ->add('annee', TextType::class)
            ->add('sexe', ChoiceType::class, array('multiple'=>false,
        'expanded'=>true,'choices'=>array('Masculin'=>'Masculin','Féminin'=>'Féminin', 'Mixte' =>'Unisexe')))
            ->add('concentration', ChoiceType::class, array('multiple'=>false,
        'expanded'=>true,'choices'=>array('elixir'=>'elixir','eau de parfum'=>'eau de parfum','eau de toilette'=>'eau de toilette')))
            ->add('description', TextareaType::class)
            ->add('image', TextareaType::class)

            ->add('famillefk', EntityType::class, array(
                      'class'=>FamilleOlfactive::class, 
                       'label' => 'Famille Olfactive',
                      'choice_label' => 'nom',
                      'multiple'=> false
                        
             ))
             ->add('marquefk', EntityType::class, array(
                      'class'=> Marque::class, 
                       'label' => 'Marque',
                      'choice_label' => 'nom',
                      'multiple'=> false,
                 
             ))

              ->add('nezfk', EntityType::class, array(
                      'class'=> Nez::class, 
                      'label' => 'Nez',
                      'choice_label' => 'nom',
                      'multiple'=> true,
                 
             ))

             ->add('tetefk', EntityType::class, array(
                      'class'=> NoteTete::class, 
                      'label' => 'Notes de Tête',
                      'choice_label' => 'nom',
                      'multiple'=> true,
                 
             ))
               ->add('coeurfk', EntityType::class, array(
                      'class'=> NoteCoeur::class, 
                      'label' => 'Notes de Coeur',
                      'choice_label' => 'nom',
                      'multiple'=> true,
                 
             ))
                 ->add('fondfk', EntityType::class, array(
                      'class'=> NoteFond::class, 
                      'label' => 'Notes de Fond',
                      'choice_label' => 'nom',
                      'multiple'=> true,
                 
             ))
             /*

            -> add(
                'nezfk',
                 CollectionType::class,
                 [
                 
                 'entry_type'=> NezType::class,
                 'allow_add' => true,
                 'allow_delete' => true
                 ]
                 
                 )*/

            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parfum::class,
        ]);
    }
}
