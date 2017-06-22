<?php

namespace MPCleanCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MediaController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addAction()
    {
        return $this->render('MPCleanCoreBundle:Media:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        return $this->render('MPCleanCoreBundle:Media:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('MPCleanCoreBundle:Media:delete.html.twig', array(
            // ...
        ));
    }

}
