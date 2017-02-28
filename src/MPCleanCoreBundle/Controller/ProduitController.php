<?php

namespace MPCleanCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MPCleanCoreBundle\Entity\Produit;

class ProduitController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {       
        $produits = $this->getDoctrine()->getRepository("MPCleanCoreBundle:Produit")->findAll();

        return $this->render('MPCleanCoreBundle:Produit:index.html.twig', array(
            'produits' => $produits
        ));
    }
}
