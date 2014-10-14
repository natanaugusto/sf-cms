<?php

namespace Cms\DashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsDashBundle:Default:index.html.twig');
    }

    public function boardAction()
    {
        return $this->render('CmsDashBundle:Default:board.html.twig');
    }
}
