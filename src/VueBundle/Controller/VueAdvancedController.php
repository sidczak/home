<?php

namespace VueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VueAdvancedController extends Controller
{
    /**
     * @Route("/", name="vue_advanced_homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:index.html.twig');
    }
    
    /**
     * @Route("/example1", name="vue_advanced_example1")
     */
    public function example1Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example1.html.twig',[
            'title' => 'Welcome Vue Advanced - example1 - Klasyczne podejście do pracy z Vue'
        ]);
    }

    /**
     * @Route("/example2", name="vue_advanced_example2")
     */
    public function example2Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example2.html.twig',[
            'title' => 'Welcome Vue Advanced - example2 - Bootstrap aplikacji z vue-cli'
        ]);
    }
}