<?php

namespace App\Form;

use App\Entity\Attribute;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttributeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceType::class, [
                'label'=> 'attribute.form.name_label',
                'placeholder' => 'attribute.form.name_input_placeholder',
                'required' => true,
                'choices' => [
                    'attribute.name.backgroundcolor' => 'backgroundcolor',
                    'attribute.name.buttoncolor' => 'buttoncolor',
                    'attribute.name.displaytime' => 'displaytime',
                    'attribute.name.time' => 'time',
                    'attribute.name.picture' => 'picture',
                ],
            ])
            ->add('description',TextareaType::class, [
                'label'=> 'attribute.form.description_label',
                'attr' => ['placeholder' => 'attribute.form.description_input_placeholder'],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Attribute::class,
        ]);
    }
}
