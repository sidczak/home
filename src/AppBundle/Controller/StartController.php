<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StartController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('start/index.html.twig');
    }

    /**
     * @Route("/about-me", name="_about_me")
     */
    public function aboutMeAction(Request $request)
    {
        return $this->render('start/aboutMe.html.twig');
    }
}