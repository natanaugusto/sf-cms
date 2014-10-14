<?php

namespace Cms\DashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CmsDashBundle:Default:index.html.twig', array('name' => $name));
    }
}
