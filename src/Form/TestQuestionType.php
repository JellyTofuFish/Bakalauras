<?php

namespace App\Form;

use App\Entity\Question;
use App\Entity\Test;
use App\Entity\TestQuestion;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestQuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('serial_number', IntegerType::class)
//            ->add('fk_test', EntityType::class,[
//                'class' => Test::class,
//                'choice_label' => 'name',
//                'multiple' => false,
//                'expanded' => false,
//                ])
            ->add('fk_question', EntityType::class, [
                'placeholder' => 'test.form.test_question_input_placeholder',
                'class' => Question::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('q')
                        ->leftJoin('q.fk_group', 'g')
                        ->addOrderBy('g.name', 'DESC')
                        ->addOrderBy('q.question_name', 'ASC')
                        ;
                },
                'attr' => [ 'class'=>'custom-select btn-no-right-radius'],
                'multiple' => false,
                'expanded' => false,
                'label' => 'test.form.test_question_label',
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TestQuestion::class,
        ]);
    }
}
