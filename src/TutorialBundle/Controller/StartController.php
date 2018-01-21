<?php

namespace TutorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{
    public function indexAction()
    {
        return $this->render('TutorialBundle:Start:index.html.twig');
    }
}
