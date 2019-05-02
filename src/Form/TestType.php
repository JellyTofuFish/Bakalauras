<?php

namespace App\Form;

use App\Entity\Question;
use App\Entity\Test;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=> 'test.form.test_name_label',
                'attr' => ['placeholder' => 'test.form.test_input_placeholder', 'maxlength' => 255],
                'required' => true,
            ])
            ->add('description',TextareaType::class, [
                'label'=> 'test.form.description_label',
                'attr' => ['placeholder' => 'test.form.description_input_placeholder'],
                'required' => false,
            ])
            ->add('code', TextType::class, [
                'label'=> 'test.form.code',
            ])
            ->add('test_start', DateType::class, [
                'label'=> 'test.form.test_start_label',
                'attr' => ['placeholder' => 'test.form.date_placeholder'],
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd H:m:s',
                'html5' => false,
                'required' => false,
            ] )
            ->add('test_end', DateType::class, [
                'label'=> 'test.form.test_end_label',
                'attr' => ['placeholder' => 'test.form.date_placeholder'],
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd H:m:s',
                'html5' => false,
                'required' => false,
            ] )
            ->add('is_active', CheckboxType::class, [
                'label' => 'test.form.is_active_description',
                'required' => false,
            ])
            ->add('testquestions', CollectionType::class, [
                'label' => false,
                'entry_type' => TestQuestionType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
//            ->add('users')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Test::class,
        ]);
    }
}
