<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('categorycategory',EntityType::class, array(
					'class'=>'AppBundle:Category',
					'choice_label' => 'category',
					'expanded' => true,
					'multiple' => true
			))
			->add('file',FileType::class)
        ;
    }
	/*
	use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// ...

 ->add('categorycategory',EntityType::class, array(
					'class'=>'AppBundle:Category',
					'choice_label' => 'category',
					'placeholder' => 'Select category',
					'expanded' => false,
					'multiple' => false
			))


FileType::class
$builder->add('users', EntityType::class, array(
    'class' => 'AppBundle:User',
    'choices' => $group->getUsers(),
));

 'property' => 'tag',
          'empty_value' => 'Selecciona tags',
          'multiple' => true
    */
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Video'
        ));
    }
}
