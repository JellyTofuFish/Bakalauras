<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label'=> 'user.form.email_type',
                'attr' => ['placeholder' => 'user.form.email_type_placeholder'],
                'required' => true,
            ])
            ->add('name', TextType::class, [
                'label'=> 'user.form.name_label',
                'attr' => ['placeholder' => 'user.form.name_label_placeholder'],
                'required' => true,
            ])
            ->add('last_name', TextType::class, [
                'label'=> 'user.form.last_name_label',
                'attr' => ['placeholder' => 'user.form.last_name_label_placeholder'],
                'required' => true,
            ])
            ->add('phone', TextType::class, [
                'label'=> 'user.form.phone_label',
                'attr' => ['placeholder' => 'user.form.phone_placeholder'],
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
