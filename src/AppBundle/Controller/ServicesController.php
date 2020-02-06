<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ServicesController extends Controller
{
    /**
     * @Route("/land-title", name="land_title")
     */
    public function landTitleAction()
    {
        return $this->render('@App/services/land.title.html.twig', []);
    }

    /**
     * @Route("/surveying", name="survey")
     */
    public function surveyAction()
    {
        return $this->render('@App/services/survey.html.twig', []);
    }

    /**
     * @Route("/land_verification", name="land_verification")
     */
    public function landVerificationAction()
    {
        return $this->render('@App/services/land.verification.html.twig', []);
    }

    /**
     * @Route("/mortgage", name="mortgage")
     */
    public function mortgageAction()
    {
        return $this->render('@App/services/mortgage.html.twig', []);
    }

    /**
     * @Route("/lease", name="lease")
     */
    public function leaseAction()
    {
        return $this->render('@App/services/lease.html.twig', []);
    }

    /**
     * @Route("/rent", name="rent")
     */
    public function rentAction()
    {
        return $this->render('@App/services/rent.html.twig', []);
    }
}
