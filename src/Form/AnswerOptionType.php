<?php

namespace App\Form;

use App\Entity\AnswerOption;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerOptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('answer', TextType::class, [
                'attr' => ['placeholder' => 'question.form.answeroptions_input_placeholder', 'class'=>'form-control btn-no-right-radius', 'maxlength' => 255],
                'label' => 'question.form.answeroptions_label',
                'required'=> true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AnswerOption::class,
        ]);
    }
}
