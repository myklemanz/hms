<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use AppBundle\Entity\Property;
use AppBundle\Form\MessageType;
use AppBundle\Util\Message\Helper\MessageHelper;
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
     * @Route("/buy", name="buy")
     * 
     */
    public function displayPropertiesForSale()
    {
        return $this->render('@App/default/for.sale.html.twig', []);
    }

    /**
     * @Route("/rent", name="rent")
     * 
     */
    public function displayPropertiesForRent()
    {
        return $this->render('@App/default/for.rent.html.twig', []);
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
     * 
     */
    public function blogAction()
    {
        return $this->render('@App/default/blog.html.twig');
    }

    /**
     * @Route("/property_details/{propertyId}", name="property-details")
     * @param string $propertyId
     * 
     */
    public function showPropertyDetailsAction(string $propertyId)
    {
        $repository = $this->getDoctrine()->getRepository(Property::class);
        $property = $repository->findOneBy(['propertyId' => $propertyId]);

        if (empty($property)) {
            $this->addFlash('warning', 'Property not found.');
            return $this->redirectToRoute('home');     
        }

        return $this->render('@App/default/property-details.html.twig',
            [
                'property'  => $property
            ]    
        );
    }

    /**
     * @Route("/contact-us", name="contact")
     * @param Request $request
     *
     */
    public function contactUsAction(Request $request, MessageHelper $messageHelper)
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

            $messageHelper->sendNotification($message, $this->getParameter('mailer_user'));

            $this->addFlash('success', 'Message sent successfully.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('@App/default/contact.us.html.twig',
            [
                'form' => $form->createView()
            ]);
    }
}
