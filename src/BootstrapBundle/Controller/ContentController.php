<?php

namespace BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{
    public function typographyAction()
    {
        return $this->render('BootstrapBundle:Content:typography.html.twig');
    }
    
    public function codeAction()
    {
        $template = 
<<<EOF
{% extends 'base.html.twig' %}
{% block title %}Lists{% endblock %}

{% block body %}
    {#{{ show_source_code(_self) }}#}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-3">
                    <h2>Lists</h2>
                </div>
            </div>
            <div class="col-md-12">
                <h1>{{ title }}</h1>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}{% endblock %}
{% block javascripts %}{% endblock %}
EOF;
        
        $controller = 
<<<EOF
<?php
public function listsAction()
{
    return this->render('BootstrapBundle:Content:lists.html.twig');
}
EOF;
        
        return $this->render('BootstrapBundle:Content:code.html.twig', [
            'template' => $template,
            'controller' => $controller
        ]);
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

