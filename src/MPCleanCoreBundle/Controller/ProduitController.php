<?php

namespace MPCleanCoreBundle\Controller;

use MPCleanCoreBundle\MPCleanCoreBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ProduitController extends Controller
{
    public function nettoyageAction()
    {
        $produits = $this->getDoctrine()->getRepository('MPCleanCoreBundle:Produit')->findAll();

        return $this->render('MPCleanCoreBundle:Produit:index.html.twig', array());
    }
}
