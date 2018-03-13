<?php

namespace BootstrapBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VueController extends Controller
{
    /**
     * @Route("/quick-start", name="vue_quick_start")
     */
    public function indexAction(Request $request)
    {
        return $this->render('BootstrapBundle:Vue:index.html.twig', [
            'title' => 'Welcome'
        ]);
    }
}

