<?php

namespace BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{
    public function typographyAction()
    {
        return $this->render('BootstrapBundle:Content:typography.html.twig');
    }
    
    public function listsAction()
    {
        return $this->render('BootstrapBundle:Content:lists.html.twig');
    }
    
    public function fontsAction()
    {
        return $this->render('BootstrapBundle:Content:fonts.html.twig');
    }
}

