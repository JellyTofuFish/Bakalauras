<?php

namespace App\Form;

use App\Entity\GroupList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=> 'group.form.name_label',
                'attr' => ['placeholder' => 'group.form.name_input_placeholder'],
                'required' => true,
            ])
            ->add('description',TextareaType::class, [
                'label'=> 'group.form.description_label',
                'attr' => ['placeholder' => 'group.form.description_input_placeholder'],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GroupList::class,
        ]);
    }
}
