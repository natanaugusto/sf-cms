<?php

namespace Cms\BasicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CmsBasicBundle:Default:index.html.twig', array('name' => $name));
    }
}
