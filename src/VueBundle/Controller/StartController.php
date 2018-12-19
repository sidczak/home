<?php

namespace VueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{
    public function indexAction()
    {
        return $this->render('VueBundle:Start:index.html.twig');
    }
}
