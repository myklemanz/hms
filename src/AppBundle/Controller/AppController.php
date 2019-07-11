<?php

namespace AppBundle\Controller;

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
     */
    public function contactUsAction()
    {
        return $this->render('@App/default/contact.us.html.twig', []);
    }
    
}
