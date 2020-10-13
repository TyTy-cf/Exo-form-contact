<?php


namespace App\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

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
                    'minlength' => 2,
                    'maxlength' => 150,
                    'required' => true
                ]
            ]);
        // Champ du prénom de la personne
        $builder->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'minlength' => 2,
                    'maxlength' => 150,
                    'required' => true
                ]
            ]);
        // Champ de l'email de la personne
        $builder->add('Email', EmailType::class, [
            'attr' => [
                'maxlength' => 150,
                'required' => true
            ]
        ]);
        // Champ de l'objet de la demande
        $builder->add('Objet', ChoiceType::class, [
            'choices' => [
                'li1' => 'Lorem Ipsum 1',
                'li2' => 'Lorem Ipsum 2',
                'li3' => 'Lorem Ipsum 3',
                'li4' => 'Lorem Ipsum 4',
                'li5' => 'Lorem Ipsum 5',
                'li6' => 'Lorem Ipsum 6'
            ],
            'attr' => [
                'required' => true
            ]
        ]);
        // Champ du message
        $builder->add('Message', TextType::class, [
            'attr' => [
                'minlength' => 20,
                'required' => true
            ]
        ]);
        // Champ du numéro de téléphone de la personne
        $builder->add('Numéro de téléphone', TelType::class, [
            'attr' => [
                'pattern' => '^[0]{1}[1-9]{1}[0-9]{8}$',
                'required' => false
            ]
        ]);
        // Validation du form
        $builder->add('Soumettre', SubmitType::class);
    }

}