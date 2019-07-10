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

    
}
