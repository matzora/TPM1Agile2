<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23/08/15
 * Time: 23:23
 */
namespace TPM1Agile2\Bundle\UserBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use TPM1Agile2\Bundle\UIBundle\Form\AddressType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{

    /**
     * (non-PHPdoc)
     * 
     * @see \Symfony\Component\Form\AbstractType::buildForm()
     * @param FormBuilderInterface $builder            
     * @param array $options            
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('gender', 'choice', array(
            'attr' => array(
                'class' => 'radio-inline'
            ),
            'label' => '* Civilité:',
            'expanded' => true,
            'multiple' => false,
            'choices' => array(
                '0' => 'Madame',
                '1' => 'Monsieur'
            ),
            'required' => true
        ))
            ->add('lastname', 'text', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => '* Nom:',
            'required' => true
        ))
            ->add('firstname', 'text', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => '* Prenom:',
            'required' => true
        ))
            ->add('email', 'email', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => '* Mail:',
            'translation_domain' => 'FOSUserBundle',
            'required' => true
        ))
            ->add('phone', 'number', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => '* Tel:',
            'required' => true
        ))
            ->add('plainPassword', 'repeated', array(
            'type' => 'password',
            'options' => array(
                'translation_domain' => 'FOSUserBundle'
            ),
            'first_options' => array(
                'label' => '* Mot de passe:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ),
            'second_options' => array(
                'label' => '* Confirmation:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ),
            'invalid_message' => 'fos_user.password.mismatch'
        ))
            ->add('address', new AddressType())
            ->add('status', 'choice', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'expanded' => false,
            'label' => '* statut:',
            'multiple' => false,
            'choices' => array(
                'etudiant' => 'Etudiant',
                'enseignant' => 'Enseignant',
                'personnel' => 'Personnel'
            ),
            'required' => true
        ))
            ->add('structure', 'choice', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'expanded' => false,
            'label' => '* structure:',
            'multiple' => false,
            'choices' => array(
                '1' => 'IMIE - Ecole de la filière numérique',
                '2' => 'Cupckage caramelum',
                '3' => 'Muffin chocolatus'
            ),
            'required' => true
        ))
            ->add('age', 'choice', array(
            'attr' => array(
                'class' => 'radio-inline'
            ),
            'label' => '* Vous avez plus de 18 ans:',
            'expanded' => true,
            'multiple' => false,
            'choices' => array(
                '1' => 'Oui',
                '0' => 'Non'
            ),
            'required' => true
        ))
            ->add('type', 'choice', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'expanded' => false,
            'multiple' => false,
            'label' => '* Vous souhaitez vous inscrire principalement en tant que:',
            'choices' => array(
                'passenger' => 'Passager',
                'driver' => 'Conducteur',
                'personnel' => 'Personnel'
            ),
            'required' => true
        ))
            ->add('licencePlate', 'text', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => "* Merci de renseigner votre plaque d'immatriculation si conducteur :",
            'required' => false
        ))
            ->add('axis', 'entity', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'class' => 'TPM1Agile2\Bundle\UIBundle\Entity\Axis',
            'label' => '* Vous souhaitez vous inscrire principalement pour l\'axe:',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('a')
                    ->orderBy('a.name', 'ASC');
            },
            'multiple' => false,
            'expanded' => false
        ))
            ->add('truth', 'checkbox', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => "* J'atteste l'exactitude des informations fournies.",
            'required' => true,
            'mapped' => false
        ))
            ->add('cgu', 'checkbox', array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'label' => "* J'ai pris connaissance et j'accepte les conditions d'utilisation du service KLASS.",
            'required' => true,
            'mapped' => false
        ))
            ->add('validation', 'submit')
            ->remove('username');
    }

    /**
     *
     * @param OptionsResolver $resolver            
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TPM1Agile2\Bundle\UserBundle\Entity\User',
            'cascade_validation' => true
        ));
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return 'TPM1Agile2_user_registration';
    }
}