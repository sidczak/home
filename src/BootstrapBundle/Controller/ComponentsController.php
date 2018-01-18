<?php

namespace BootstrapBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComponentsController extends Controller
{
    /**
     * @Route("/modal", name="components_modal")
     */
    public function modalAction(Request $request)
    {
        return $this->render('BootstrapBundle:Components:modal.html.twig');
    }
}