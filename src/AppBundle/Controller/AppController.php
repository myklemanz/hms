<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends Controller
{
    /**
     * @Route("/", name="home")
     * 
     */
    public function homeAction()
    {
        return $this->render('@App/default/home.html.twig', []);
    }

    /**
     * @Route("/about-us", name="about")
     * 
     */
    public function aboutUsAction()
    {
        return $this->render('@App/default/about.us.html.twig', []);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction()
    {
        return $this->render('@App/default/blog.html.twig');
    }

    /**
     * @Route("/contact-us", name="contact")
     * @param Request $request
     *
     */
    public function contactUsAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, null, ['validation_groups' => ['contact', 'Default']]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $message = $form->getData();
            $message->setCreatedAt(new \DateTime());

            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('@App/default/contact.us.html.twig',
            [
                'form' => $form->createView()
            ]);
    }
}
