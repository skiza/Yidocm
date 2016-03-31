<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;  // input type="password"
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;  // campo selección: select, checkbox o radio
use Symfony\Bridge\Doctrine\Form\Type\EntityType;  // permite cargar opciones desde una entidad Doctrine
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Intl\Intl;  //  

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     // se genera un array aspciativo de (sigla_pais => pais)
	$countries = Intl::getRegionBundle()->getCountryNames();
	// var_dump($countries);

        $builder
            ->add('email')
            ->add('password', PasswordType::class)
            ->add('alias')
            ->add('gender', 
		ChoiceType::class, 
		array('choices' => array('F' => 'Female',
				        'M'  => 'Male'),
			'data' => 'F',
			'multiple' => false,
			'expanded' => true))
            ->add('dateofbirth', BirthdayType::class)
            ->add('city')
	->add('countryInitial', 
		EntityType::class, 
		array('class' => 'AppBundle:Country',
			'choice_label' => 'country',
			'placeholder' => 'Choose your country'))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }
}
