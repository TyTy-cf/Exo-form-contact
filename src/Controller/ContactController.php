<?php


namespace App\Controller;


use App\Form\Type\FormContact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/home", name="contact_home")
     * @return Response
     */
    public function contactIndex() : Response {
        // Creation du form contact
        $formContact = $this->createForm(FormContact::class);

        // Si le formulaire est soumis & valide on le redirige sur la page de rappel des informations saisies
        if ($formContact->isSubmitted() && $formContact->isValid()) {

        }

        // On renvoie le form contact à la vue
        return $this->render('contact/index_form_contact.html.twig', [
            'formContact' => $formContact
        ]);
    }

}