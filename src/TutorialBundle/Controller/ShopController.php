<?php

namespace TutorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function indexAction()
    {
        return $this->render('TutorialBundle:Shop:index.html.twig');
    }
    
    /*public function step1Action()
    {
        return $this->render('TutorialBundle:Shop:step1.html.twig');
    }*/
}