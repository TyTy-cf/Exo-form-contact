<?php


namespace App\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Class FormContact, représente le formulaire de contact
 *
 * @package App\Form\Type
 */
class FormContact extends AbstractType
{
    /**
     * Créer les différents champs du fomrulaire de contact
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        // Champ du nom de la personne
        $builder->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'maxlength' => 150
                ],
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'max' => 150,
                        'minMessage' => "Le nom doit être au minimum de {{ limit }} caractères",
                        'maxMessage' => "Le nom doit être au maximum de {{ limit }} caractères",
                    ]),
                    new NotBlank([
                        'message' => 'Le nom doit être renseigné'
                    ]),
                ],
            ]);
        // Champ du prénom de la personne
        $builder->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'maxlength' => 150
                ],
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'max' => 150,
                        'minMessage' => "Le prénom doit être au minimum de {{ limit }} caractères",
                        'maxMessage' => "Le prénom doit être au maximum de {{ limit }} caractères",
                    ]),
                    new NotBlank([
                        'message' => 'Le prénom doit être renseigné'
                    ]),
                ],
            ]);
        // Champ de l'email de la personne
        $builder->add('email', EmailType::class, [
            'label' => 'Email',
            'attr' => [
                'maxlength' => 150
            ],
            'constraints' => [
                new Length([
                    'max' => 150,
                    'maxMessage' => "L\'email doit être au maximum de {{ limit }} caractères",
                ]),
                new NotBlank([
                    'message' => 'L\'email doit être renseigné'
                ]),
            ],
        ]);
        // Champ de l'objet de la demande
        $builder->add('objet', ChoiceType::class, [
            'label' => 'Objet',
            'choices' => [
                'Lorem Ipsum 1' => 'Lorem Ipsum 1',
                'Lorem Ipsum 2' => 'Lorem Ipsum 2',
                'Lorem Ipsum 3' => 'Lorem Ipsum 3',
                'Lorem Ipsum 4' => 'Lorem Ipsum 4',
                'Lorem Ipsum 5' => 'Lorem Ipsum 5',
                'Lorem Ipsum 6' => 'Lorem Ipsum 6'
            ],
            'constraints' => [
                new NotBlank([
                    'message' => 'L\'objet doit être renseigné'
                ]),
            ],
        ]);
        // Champ du message
        $builder->add('message', TextareaType::class, [
            'label' => 'Message',
            'constraints' => [
                new Length([
                    'min' => 20,
                    'minMessage' => "Le message doit être au minimum de {{ limit }} caractères",
                ]),
                new NotBlank([
                    'message' => 'Le message doit être renseigné'
                ]),
            ],
        ]);
        // Champ du numéro de téléphone de la personne
        $builder->add('telnumber', TelType::class, [
            'label' => 'Numéro de téléphone',
            'constraints' => [
                new Regex([
                    'pattern' => '/^[0]{1}[1-9]{1}[0-9]{8}$/',
                    'match' => true,
                    'message' => 'Le numéro de téléphone doit être au format 0123456789 avec 10 chiffres'
                ]),
            ],
        ]);
        // Validation du form
        $builder->add('Soumettre', SubmitType::class);
    }

}