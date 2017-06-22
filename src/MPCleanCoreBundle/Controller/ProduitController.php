<?php

namespace MPCleanCoreBundle\Controller;

use MPCleanCoreBundle\MPCleanCoreBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ProduitController extends Controller
{
    public function indexAction()
    {
        $produits = $this->getDoctrine()->getRepository('MPCleanCoreBundle:Produit')->findAll();

        //Pour chaque produit, recherche de l'url de son image
        foreach ($produits as $produit) {
            $media = $produit->getMedia();
            $id = $produit->getId();
        }

        return $this->render('MPCleanCoreBundle:Produit:index.html.twig', array(
            'produits' => $produits,
            'media' => $media
        ));
    }

    public function detailsAction($id)
    {

    }
}
