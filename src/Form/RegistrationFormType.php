<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;
use Symfony\Component\Validator\Constraints\Email;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Email([
                        'message' => 'L\'email "{{ value }}" n\'est pas valide.',
                        'mode' => 'html5',
                    ]),
                    new NotBlank([
                        'message' => 'L\'email est obligatoire.',
                    ]),
                    new Length([
                        'max' => 180,
                        'maxMessage' => 'L\'email ne peut dépasser 180 caractères.',
                    ])
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez acceptez les conditions pour continuer.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'mapped' => false,
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['autocomplete' => 'new-password']],
                'constraints' => [
                    new PasswordStrength([
                        'message' => 'Le mot de passe doit contenir a doit contenir au minimum un chiffre, une lettre, une majuscule et un caractère special !',
                        'tooShortMessage' => 'Le mot de passe doit contenir 10 caractères minimun !',
                        'minLength' => 10,
                        'minStrength' => 4,
                    ])
                ],
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confimation du mot de passe'],
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Nom',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom  est obligatoire.',
                    ]),
                    new Length([
                        'max' => 50,
                        'maxMessage' => 'Le nom ne peut dépasser 50 caractères.',
                    ])
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Prénom',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le prénom  est obligatoire.',
                    ]),
                    new Length([
                        'max' => 50,
                        'maxMessage' => 'Le prénom ne peut dépasser 50 caractères.',
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
