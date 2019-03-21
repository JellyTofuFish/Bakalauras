<?php

namespace App\Form;

use App\Entity\GroupList;
use App\Entity\Question;
use App\Entity\Test;
use App\Entity\TestQuestion;
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
                'label'=> 'question.form.question_label',
                'attr' => ['placeholder' => 'question.form.question_input_placeholder'],
                'required' => true,
            ])
            ->add('description',TextareaType::class, [
                'label'=> 'question.form.description_label',
                'attr' => ['placeholder' => 'question.form.description_input_placeholder'],
                'required' => false,
            ])
            ->add('type', ChoiceType::class, [
                'label'=> 'question.form.type_label',
                'placeholder' => 'question.form.type_input_placeholder',
                'required' => true,
                'choices' => [
                    'question.type.open' => 'open',
                    'question.type.one' => 'one',
                    'question.type.multi' => 'multi',
                    'question.type.presentation' => 'presentation',
                ],
            ])
            ->add('fk_group', EntityType::class, [
                'label'=> 'question.form.fk_group_label',
                'class' => GroupList::class,
                'placeholder' => 'question.form.fk_group_input_placeholder',
                'required' => false,
                'choice_label' => 'name',
                 'multiple' => false,
                 'expanded' => false,
            ] )
//            ->add('testQuestions', EntityType::class, [
//                'label'=> 'question.fk_test.label',
//                'class' => TestQuestion::class,
//                'placeholder' => 'question.fk_test.placeholder',
//                'required' => false,
//                'choice_label' => 'serial_number',
//                'multiple' => false,
//                'expanded' => false,
//            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
