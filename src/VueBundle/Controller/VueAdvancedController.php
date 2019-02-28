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

    /**
     * @Route("/example10", name="vue_advanced_example10")
     */
    public function example10Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example10.html.twig',[
            'title' => 'Welcome Vue Advanced - example10 - Pierwsze kroki z VueX'
        ]);
    }

    /**
     * @Route("/example11", name="vue_advanced_example11")
     */
    public function example11Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example11.html.twig',[
            'title' => 'Welcome Vue Advanced - example11 - Pobieranie danych'
        ]);
    }

    /**
     * @Route("/example12", name="vue_advanced_example12")
     */
    public function example12Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example12.html.twig',[
            'title' => 'Welcome Vue Advanced - example12 - Gettery'
        ]);
    }

    /**
     * @Route("/example13", name="vue_advanced_example13")
     */
    public function example13Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example13.html.twig',[
            'title' => 'Welcome Vue Advanced - example13 - Mutacje'
        ]);
    }

    /**
     * @Route("/example14", name="vue_advanced_example14")
     */
    public function example14Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example14.html.twig',[
            'title' => 'Welcome Vue Advanced - example14 - Akcje'
        ]);
    }

    /**
     * @Route("/example15", name="vue_advanced_example15")
     */
    public function example15Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example15.html.twig',[
            'title' => 'Welcome Vue Advanced - example15 - Funkcje pomocnicze'
        ]);
    }

    /**
     * @Route("/example16", name="vue_advanced_example16")
     */
    public function example16Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example16.html.twig',[
            'title' => 'Welcome Vue Advanced - example16 - Lepsza organizacja kodu'
        ]);
    }

    /**
     * @Route("/example18", name="vue_advanced_example18")
     */
    public function example18Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example18.html.twig',[
            'title' => 'Welcome Vue Advanced - example18 - Pierwsze kroki z vue-router'
        ]);
    }

    /**
     * @Route("/example19", name="vue_advanced_example19")
     */
    public function example19Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example19.html.twig',[
            'title' => 'Welcome Vue Advanced - example19 - Tworzenie tabeli routingu'
        ]);
    }

    /**
     * @Route("/example20", name="vue_advanced_example20")
     */
    public function example20Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example20.html.twig',[
            'title' => 'Welcome Vue Advanced - example20 - Generowanie odnośników'
        ]);
    }

    /**
     * @Route("/example21", name="vue_advanced_example21")
     */
    public function example21Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example21.html.twig',[
            'title' => 'Welcome Vue Advanced - example21 - Dynamiczne parametry'
        ]);
    }

    /**
     * @Route("/example22", name="vue_advanced_example22")
     */
    public function example22Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example22.html.twig',[
            'title' => 'Welcome Vue Advanced - example22 - Zagnieżdżone ścieżki'
        ]);
    }

    /**
     * @Route("/example23", name="vue_advanced_example23")
     */
    public function example23Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example23.html.twig',[
            'title' => 'Welcome Vue Advanced - example23 - Nawigacja z poziomu kodu'
        ]);
    }

    /**
     * @Route("/example24", name="vue_advanced_example24")
     */
    public function example24Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example24.html.twig',[
            'title' => 'Welcome Vue Advanced - example24 - Nazwane ścieżki'
        ]);
    }

    /**
     * @Route("/example25", name="vue_advanced_example25")
     */
    public function example25Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example25.html.twig',[
            'title' => 'Welcome Vue Advanced - example25 - Nazwane widoki'
        ]);
    }

    /**
     * @Route("/example26", name="vue_advanced_example26")
     */
    public function example26Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example26.html.twig',[
            'title' => 'Welcome Vue Advanced - example26 - Przekierowania'
        ]);
    }

    /**
     * @Route("/example27", name="vue_advanced_example27")
     */
    public function example27Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example27.html.twig',[
            'title' => 'Welcome Vue Advanced - example27 - Uniwersalne komponenty'
        ]);
    }

    /**
     * @Route("/example28", name="vue_advanced_example28")
     */
    public function example28Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example28.html.twig',[
            'title' => 'Welcome Vue Advanced - example28 - Tryb History API'
        ]);
    }

    /**
     * @Route("/example29", name="vue_advanced_example29")
     */
    public function example29Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example29.html.twig',[
            'title' => 'Welcome Vue Advanced - example29 - Tworzenie guardów'
        ]);
    }

    /**
     * @Route("/example30", name="vue_advanced_example30")
     */
    public function example30Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example30.html.twig',[
            'title' => 'Welcome Vue Advanced - example30 - Animacje'
        ]);
    }

    /**
     * @Route("/example31", name="vue_advanced_example31")
     */
    public function example31Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example31.html.twig',[
            'title' => 'Welcome Vue Advanced - example31 - Dynamiczne wczytywanie modułów'
        ]);
    }

    /**
     * @Route("/example32", name="vue_advanced_example32")
     */
    public function example32Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example32.html.twig',[
            'title' => 'Welcome Vue Advanced - example32 - Ustawienia pozycji suwaka'
        ]);
    }

    /**
     * @Route("/example33", name="vue_advanced_example33")
     */
    public function example33Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example33.html.twig',[
            'title' => 'Welcome Vue Advanced - example33 - Pierwsze kroki z axios'
        ]);
    }

    /**
     * @Route("/example35", name="vue_advanced_example35")
     */
    public function example35Action(Request $request)
    {
        return $this->render('VueBundle:VueAdvanced:example35.html.twig',[
            'title' => 'Welcome Vue Advanced - example35 - Integracja axios z Vue'
        ]);
    }
}