<?php

namespace BootstrapBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReactController extends Controller
{
    /**
     * @Route("/quick-start", name="react_quick_start")
     */
    public function modalAction(Request $request)
    {
        return $this->render('BootstrapBundle:React:index.html.twig', [
            'title' => 'Welcome'
        ]);
    }
}

