<?php

namespace TutorialBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/", name="tutorial_blog_homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('TutorialBundle:Blog:index.html.twig');
    }
    
    /**
     * @Route("/step1", name="tutorial_blog_step1")
     */
    /*public function step1Action(Request $request)
    {
        return $this->render('TutorialBundle:Blog:step1.html.twig');
    }*/
    
}