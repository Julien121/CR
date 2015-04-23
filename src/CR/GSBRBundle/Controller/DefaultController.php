<?php
namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Default
 *
 * @author JULIEN-PC
 */
class DefaultController extends Controller {
    
    public function accueilAction()
    {
        return $this->render('CRGSBRBundle:Default:index.html.twig');
    }
    
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('CRGSBRBundle:Default:connexion.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
    
    public function profilAction(Request $request)
    {
        $user = $this->getUser();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $user);
        $formBuilder
          ->add('nom',      'text', array('label' => 'Nom'))
          ->add('prenom',     'text', array('label' => 'Prénom'))
          ->add('adresse',    'text', array('label' => 'Adresse'))
          ->add('cp', 'text', array('label' => 'Code postal'))
          ->add('ville', 'text', array('label' => 'Ville'))
          ->add('dateEmbauche', 'date', array('label' => 'Date d\'embauche','widget' => 'single_text'))
          ->add('mdp',   'password', array('label' => 'Mot de passe'))
          ->add('submit', 'submit', array('label' => 'Mettre à jour'))
        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();

          $request->getSession()->getFlashBag()->add('success', 'Le profil a bien été modifié');
        }
        return $this->render('CRGSBRBundle:Default:profil.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
}
