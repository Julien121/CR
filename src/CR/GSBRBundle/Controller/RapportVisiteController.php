<?php

namespace CR\GSBRBundle\Controller;

use CR\GSBRBundle\Entity\RapportVisite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RapportVisiteController extends Controller {
    
    public function consulterAction()
    {
        $user = $this->getUser();
        $lesRapports = $this->getDoctrine()->getRepository('CRGSBRBundle:RapportVisite')->findByVisiteur($user->getId());
        return $this->render('CRGSBRBundle:RapportVisite:consulter.html.twig', array('lesRapports' => $lesRapports));
    }
    public function ajouterAction(Request $request)
    {
        $rapportVisite = new RapportVisite();
        $form = $this->get('form.factory')->createBuilder('form', $rapportVisite)
                    ->add('medecin', 'entity', array(
                        'class' => 'CRGSBRBundle:Praticien',
                        'property' => 'PrenomNom',
                        'multiple' => false)
                    )
                    ->add('dateRapport', 'date', array('widget' => 'single_text'))
                    ->add('motif', 'textarea')
                    ->add('bilan', 'textarea')
                    ->add('Ajouter', 'submit')
                    ->getForm();
        if ($form->handleRequest($request)->isValid()) 
        {
            $user = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $rapportVisite->setVisiteur($user);
            $em->persist($rapportVisite);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Le rapport de visite a été ajouté');
        }
        return $this->render('CRGSBRBundle:RapportVisite:ajouter.html.twig', array('form' => $form->createView()));
    }
}
