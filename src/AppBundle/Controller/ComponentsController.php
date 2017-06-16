<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComponentsController extends Controller
{
    /**
     * @Route("/modal", name="_about_me")
     */
    public function modalAction(Request $request)
    {
        return $this->render('components/modal.html.twig');
    }
}