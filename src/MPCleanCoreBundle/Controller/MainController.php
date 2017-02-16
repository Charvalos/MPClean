<?php

namespace MPCleanCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('MPCleanCoreBundle:Main:index.html.twig');

        return new Response($content);
    }
}
