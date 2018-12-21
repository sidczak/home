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

}
