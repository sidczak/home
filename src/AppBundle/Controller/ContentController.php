<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContentController extends Controller
{
    /**
     * @Route("/content/typography", name="_content_typography")
     */
    public function typographyAction(Request $request)
    {
        return $this->render('content/typography.html.twig');
    }
    
    /**
     * @Route("/content/lists", name="_content_lists")
     */
    public function listsAction(Request $request)
    {
        return $this->render('content/lists.html.twig');
    }
    
    /**
     * @Route("/content/fonts", name="_content_fonts")
     */
    public function fontsAction(Request $request)
    {
        return $this->render('content/fonts.html.twig');
    }
}