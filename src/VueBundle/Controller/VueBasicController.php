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
			'title' => 'Welcome Vue Basic - example2'
        ]);
    }
}
