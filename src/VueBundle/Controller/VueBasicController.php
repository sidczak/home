<?php

namespace VueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VueBasicController extends Controller
{
    public function indexAction()
    {
        return $this->render('VueBundle:VueBasic:index.html.twig');
    }
    
    public function example1Action()
    {
        return $this->render('VueBundle:VueBasic:example1.html.twig',[
			'title' => 'Welcome Vue Basic - example1'
        ]);
    }

    public function example2Action()
    {
        return $this->render('VueBundle:VueBasic:example2.html.twig',[
			'title' => 'Welcome Vue Basic - example2 - Hello World z Vue'
        ]);
    }

    public function example3Action()
    {
        return $this->render('VueBundle:VueBasic:example3.html.twig',[
			'title' => 'Welcome Vue Basic - example3 - metody'
        ]);
    }
    
    public function example4Action()
    {
        return $this->render('VueBundle:VueBasic:example4.html.twig',[
			'title' => 'Welcome Vue Basic - example4 - Wyliczone właściwości'
        ]);
    }

    public function example5Action()
    {
        return $this->render('VueBundle:VueBasic:example5.html.twig',[
            'title' => 'Welcome Vue Basic - example5 - Praca z szablonem'
        ]);
    }

    public function example6Action()
    {
        return $this->render('VueBundle:VueBasic:example6.html.twig',[
            'title' => 'Welcome Vue Basic - example6 - Atrybuty'
        ]);
    }

    public function example7Action()
    {
        return $this->render('VueBundle:VueBasic:example7.html.twig',[
            'title' => 'Welcome Vue Basic - example7 - Jak działają gettery i settery'
        ]);
    }

    public function example8Action()
    {
        return $this->render('VueBundle:VueBasic:example8.html.twig',[
            'title' => 'Welcome Vue Basic - example8 - Instancja Vue z bliska'
        ]);
    }

    public function example9Action()
    {
        return $this->render('VueBundle:VueBasic:example9.html.twig',[
            'title' => 'Welcome Vue Basic - example9 - Montowanie aplikacji'
        ]);
    }

    public function example10Action()
    {
        return $this->render('VueBundle:VueBasic:example10.html.twig',[
            'title' => 'Welcome Vue Basic - example10 - Montowanie aplikacji'
        ]);
    }

    public function example11Action()
    {
        return $this->render('VueBundle:VueBasic:example11.html.twig',[
            'title' => 'Welcome Vue Basic - example11 - Przypisywanie obsługi zdarzeń'
        ]);
    }

    public function example12Action()
    {
        return $this->render('VueBundle:VueBasic:example12.html.twig',[
            'title' => 'Welcome Vue Basic - example12 - Przypisywanie obsługi zdarzeń'
        ]);
    }

    public function example13Action()
    {
        return $this->render('VueBundle:VueBasic:example13.html.twig',[
            'title' => 'Welcome Vue Basic - example13 - Modyfikatory zdarzeń'
        ]);
    }

    public function example14Action()
    {
        return $this->render('VueBundle:VueBasic:example14.html.twig',[
            'title' => 'Welcome Vue Basic - example14 - Modyfikatory klawiszy'
        ]);
    }

    public function example15Action()
    {
        return $this->render('VueBundle:VueBasic:example15.html.twig',[
            'title' => 'Welcome Vue Basic - example15 - Praca z klasami CSS'
        ]);
    }

    public function example16Action()
    {
        return $this->render('VueBundle:VueBasic:example16.html.twig',[
            'title' => 'Welcome Vue Basic - example16 - Liniowe style CSS'
        ]);
    }

    public function example17Action()
    {
        return $this->render('VueBundle:VueBasic:example17.html.twig',[
            'title' => 'Welcome Vue Basic - example17 - Warunkowe pokazywanie elementów'
        ]);
    }
    
    public function example18Action()
    {
        return $this->render('VueBundle:VueBasic:example18.html.twig',[
            'title' => 'Welcome Vue Basic - example18 - Korzystanie z pętli'
        ]);
    }

    public function example19Action()
    {
        return $this->render('VueBundle:VueBasic:example19.html.twig',[
            'title' => 'Welcome Vue Basic - example19 - Unikalność elementów'
        ]);
    }

    public function example20Action()
    {
        return $this->render('VueBundle:VueBasic:example20.html.twig',[
            'title' => 'Welcome Vue Basic - example20 - Grupowanie elementów'
        ]);
    }

    public function example21Action()
    {
        return $this->render('VueBundle:VueBasic:example21.html.twig',[
            'title' => 'Welcome Vue Basic - example21 - Counter - Odliczanie'
        ]);
    }

    public function example22Action()
    {
        return $this->render('VueBundle:VueBasic:example22.html.twig',[
            'title' => 'Welcome Vue Basic - example22 - Uchwyty do elementów z DOM'
        ]);
    }

    public function example23Action()
    {
        return $this->render('VueBundle:VueBasic:example23.html.twig',[
            'title' => 'Welcome Vue Basic - example23 - Dwukierunkowe wiązanie danych'
        ]);
    }

    public function example24Action()
    {
        return $this->render('VueBundle:VueBasic:example24.html.twig',[
            'title' => 'Welcome Vue Basic - example24 - Własna implementacja modelu'
        ]);
    }

    public function example25Action()
    {
        return $this->render('VueBundle:VueBasic:example25.html.twig',[
            'title' => 'Welcome Vue Basic - example25 - Praca z radio i checkbox'
        ]);
    }

    public function example26Action()
    {
        return $this->render('VueBundle:VueBasic:example26.html.twig',[
            'title' => 'Welcome Vue Basic - example26 - Praca z polem select'
        ]);
    }
}
