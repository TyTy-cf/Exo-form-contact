<?php


namespace App\Controller;


use App\Form\Type\FormContact;
use App\Model\FormDataClassContact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/", name="contact_form")
     * @param Request $request la requête
     * @return Response
     */
    public function contactForm(Request $request) : Response {
        // Creation du form contact
        $formContact = $this->createForm(FormContact::class);

        $formContact->handleRequest($request);

        // Si le formulaire est soumis & valide on le redirige sur la page de rappel des informations saisies
        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $data = $formContact->getData();
            $contact = new FormDataClassContact(
                $data['nom'],
                $data['prenom'],
                $data['email'],
                $data['objet'],
                $data['message'],
                $data['telnumber']
            );
            return $this->render('contact/submit_infos_contact.html.twig', [
                'contactData' => $contact
            ]);
        }

        // On renvoie le form contact à la vue
        return $this->render('contact/index_form_contact.html.twig', [
            'formContact' => $formContact->createView()
        ]);
    }

}