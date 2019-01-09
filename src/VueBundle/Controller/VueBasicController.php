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

    public function example27Action()
    {
        return $this->render('VueBundle:VueBasic:example27.html.twig',[
            'title' => 'Welcome Vue Basic - example27 - Kontrolowanie zwracanych wartości'
        ]);
    }

    public function example28Action()
    {
        return $this->render('VueBundle:VueBasic:example28.html.twig',[
            'title' => 'Welcome Vue Basic - example28 - Obserwowanie zmian wartości'
        ]);
    }

    public function example29Action()
    {
        return $this->render('VueBundle:VueBasic:example29.html.twig',[
            'title' => 'Welcome Vue Basic - example29 - Tworzenie własnych filtrów'
        ]);
    }

    public function example30Action()
    {
        return $this->render('VueBundle:VueBasic:example30.html.twig',[
            'title' => 'Welcome Vue Basic - example30 - Sposoby na filtrowanie danych'
        ]);
    }

    public function example31Action()
    {
        return $this->render('VueBundle:VueBasic:example31.html.twig',[
            'title' => 'Welcome Vue Basic - example31 - Tworzenie własnych dyrektyw'
        ]);
    }

    public function example32Action()
    {
        return $this->render('VueBundle:VueBasic:example32.html.twig',[
            'title' => 'Welcome Vue Basic - example32 - Tworzenie własnych komponentów'
        ]);
    }

    public function example33Action()
    {
        return $this->render('VueBundle:VueBasic:example33.html.twig',[
            'title' => 'Welcome Vue Basic - example33 - Przekazywanie danych'
        ]);
    }

    public function example34Action()
    {
        return $this->render('VueBundle:VueBasic:example34.html.twig',[
            'title' => 'Welcome Vue Basic - example34 - Walidacja przekazywanych danych'
        ]);
    }

    public function example35Action()
    {
        return $this->render('VueBundle:VueBasic:example35.html.twig',[
            'title' => 'Welcome Vue Basic - example35 - Komunikacja pomiędzy komponentami w dół'
        ]);
    }

    public function example36Action()
    {
        return $this->render('VueBundle:VueBasic:example36.html.twig',[
            'title' => 'Welcome Vue Basic - example36 - Komunikacja pomiędzy komponentami w górę'
        ]);
    }

    public function example37Action()
    {
        return $this->render('VueBundle:VueBasic:example37.html.twig',[
            'title' => 'Welcome Vue Basic - example37 - Synchronizacja właściwości'
        ]);
    }

    public function example38Action()
    {
        return $this->render('VueBundle:VueBasic:example38.html.twig',[
            'title' => 'Welcome Vue Basic - example38 - Inne metody komunikacji'
        ]);
    }

    public function example39Action()
    {
        return $this->render('VueBundle:VueBasic:example39.html.twig',[
            'title' => 'Welcome Vue Basic - example39 - Edytowalna lista użytkowników cz.1'
        ]);
    }

    public function example40Action()
    {
        return $this->render('VueBundle:VueBasic:example40.html.twig',[
            'title' => 'Welcome Vue Basic - example40 - Edytowalna lista użytkowników cz.2'
        ]);
    }

    public function example41Action()
    {
        return $this->render('VueBundle:VueBasic:example41.html.twig',[
            'title' => 'Welcome Vue Basic - example41 - Edytowalna lista użytkowników cz.3'
        ]);
    }

    public function example42Action()
    {
        return $this->render('VueBundle:VueBasic:example42.html.twig',[
            'title' => 'Welcome Vue Basic - example42 - Dynamiczna podmiana komponentów'
        ]);
    }

    public function example43Action()
    {
        return $this->render('VueBundle:VueBasic:example43.html.twig',[
            'title' => 'Welcome Vue Basic - example43 - Kontrola treści komponentu za pomocą slotu'
        ]);
    }

    public function example44Action()
    {
        return $this->render('VueBundle:VueBasic:example44.html.twig',[
            'title' => 'Welcome Vue Basic - example44 - Tworzenie wielu slotów'
        ]);
    }

    public function example45Action()
    {
        return $this->render('VueBundle:VueBasic:example45.html.twig',[
            'title' => 'Welcome Vue Basic - example45 - Implementacja modelu na komponencie'
        ]);
    }

    public function example46Action()
    {
        return $this->render('VueBundle:VueBasic:example46.html.twig',[
            'title' => 'Welcome Vue Basic - example46 - Podstawy animacji'
        ]);
    }

    public function example47Action()
    {
        return $this->render('VueBundle:VueBasic:example47.html.twig',[
            'title' => 'Welcome Vue Basic - example47 - Animacje zmiany komponentu'
        ]);
    }

    public function example48Action()
    {
        return $this->render('VueBundle:VueBasic:example48.html.twig',[
            'title' => 'Welcome Vue Basic - example48 - Animacje listy'
        ]);
    }

    public function example49Action()
    {
        return $this->render('VueBundle:VueBasic:example49.html.twig',[
            'title' => 'Welcome Vue Basic - example49 - Integracja z animate.css'
        ]);
    }
}
