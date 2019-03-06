<?php

namespace App\Form;

use App\Entity\GroupList;
use App\Entity\Question;
use App\Entity\Test;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question', TextType::class, [
                'required' => true,
            ])
            ->add('description',TextareaType::class, [
                'required' => false,
            ])
            ->add('type', ChoiceType::class, [
                'required' => true,
                'placeholder' => 'Pasirinkinte klausimo tipą',
                'choices' => [
                    'Open' => 'open',
                    'One Pick' => 'one',
                    'Multi Pick' => 'multi',
                    'Presentation' => 'presentation',
                ],
            ])
            ->add('fk_group', EntityType::class, [
                'class' => GroupList::class,
                'required' => false,
                'choice_label' => 'name',
                 'multiple' => false,
                 'expanded' => false,
            ] )
            ->add('fk_test', EntityType::class, [
                'class' => Test::class,
                'required' => false,
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
