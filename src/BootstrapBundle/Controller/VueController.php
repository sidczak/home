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
    
    /**
     * @Route("/episode1-basic-data-binding", name="episode1_basic_data_binding")
     */
    public function episode1BasicDataBindingAction(Request $request)
    {
        return $this->render('BootstrapBundle:Vue:episode1BasicDataBinding.html.twig', [
            'title' => 'Basic Data Binding'
        ]);
    }
    
    /**
     * @Route("/episode2-setup-vue-devtools", name="episode2_setup_vue_devtools")
     */
    public function episode2SetupVueDevtoolsAction(Request $request)
    {
        return $this->render('BootstrapBundle:Vue:episode2SetupVueDevtools.html.twig', [
            'title' => 'Setup Vue Devtools'
        ]);
    }
    
    /**
     * @Route("/episode3-lists", name="episode3_lists")
     */
    public function episode3ListsAction(Request $request)
    {
        return $this->render('BootstrapBundle:Vue:episode3Lists.html.twig', [
            'title' => 'Lists'
        ]);
    }
    
    /**
     * @Route("/episode4-vue-event-listeners", name="episode4_vue_event_listeners")
     */
    public function episode4VueEventListenersAction(Request $request)
    {
        return $this->render('BootstrapBundle:Vue:episode4VueEventListeners.html.twig', [
            'title' => 'Vue Event Listeners'
        ]);
    }
    
}