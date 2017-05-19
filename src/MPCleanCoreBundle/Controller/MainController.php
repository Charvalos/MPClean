<?php

namespace MPCleanCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('MPCleanCoreBundle:Main:index.html.twig');

        return new Response($content);
    }

    public function contactAction()
    {
        //Création du formulaire de contact
        $form = $this->createFormBuilder()
            ->add('nom', TextType::class, array(
                'required' => true,
                'label' => false,
                'attr' => array(
                    'placeholder' => 'NOM',
                )
            ))
            ->add('prenom', TextType::class, array(
                'required' => true,
                'label' => false,
                'attr' => array(
                    'placeholder' => 'PRENOM'
                )
            ))
            ->add('email', TextType::class, array(
                'required' => true,
                'label' => false,
                'attr' => array(
                    'placeholder' => 'EMAIL'
                )
            ))
            ->add('message', TextareaType::class, array(
                'required' => true,
                'label' => false,
                'attr' => array(
                    'placeholder' => 'MESSAGE'
                )
            ))
            ->getForm();

        $content = $this->get('templating')->render('MPCleanCoreBundle:Main:contact.html.twig', array('form' => $form->createView()));

        return new Response($content);
    }
}
