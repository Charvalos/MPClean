<?php

namespace MPCleanCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MPCleanCoreBundle:Default:index.html.twig');
    }
}
