<?php

namespace MPCleanCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PrestationController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $prestation = $this->getDoctrine()->getRepository('MPCleanCoreBundle:Prestation')->findAll();

        return $this->render('MPCleanCoreBundle:Prestation:index.html.twig', array(
            'prestations' => $prestation
        ));
    }

}
