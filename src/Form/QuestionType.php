<?php

namespace App\Form;

use App\Entity\AnswerOption;
use App\Entity\GroupList;
use App\Entity\Question;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question_name', TextType::class, [
                'label'=> 'question.form.question_name_label',
                'attr' => ['placeholder' => 'question.form.question_input_placeholder'],
                'required' => true,
            ])
            ->add('question_wording',TextareaType::class, [
                'label'=> 'question.form.question_wording_label',
                'attr' => ['placeholder' => 'question.form.question_wording_input_placeholder'],
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
             ->add('answeroptions', CollectionType::class, [
                'entry_type' => AnswerOptionType::class,
                'label' => false,
                'allow_add' => true,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_delete' => true,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
