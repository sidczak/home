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

    /**
     * @Route("/example3", name="vue_advanced_example3")
     */
    public function example3Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example3.html.twig',[
            'title' => 'Welcome Vue Advanced - example3 - Jednoplikowe komponenty'
        ]);
    }

    /**
     * @Route("/example4", name="vue_advanced_example4")
     */
    public function example4Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example4.html.twig',[
            'title' => 'Welcome Vue Advanced - example4 - Funkcja renderująca vs. szablon'
        ]);
    }

    /**
     * @Route("/example5", name="vue_advanced_example5")
     */
    public function example5Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example5.html.twig',[
            'title' => 'Welcome Vue Advanced - example5 - Komponenty funkcyjne'
        ]);
    }

    /**
     * @Route("/example6", name="vue_advanced_example6")
     */
    public function example6Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example6.html.twig',[
            'title' => 'Welcome Vue Advanced - example6 - Korzystanie z mixin'
        ]);
    }

    /**
     * @Route("/example7", name="vue_advanced_example7")
     */
    public function example7Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example7.html.twig',[
            'title' => 'Welcome Vue Advanced - example7 - Przepływ informacji w aplikacji'
        ]);
    }
}