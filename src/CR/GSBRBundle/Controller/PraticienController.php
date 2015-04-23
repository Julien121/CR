<?php

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PraticienController extends Controller {
    
    public function listeAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getRepository('CRGSBRBundle:Praticien')
        ;
        
        $listPraticiens = $repository->findAll();

         return $this->render('CRGSBRBundle:Praticien:liste.html.twig', array('listPraticiens'=> $listPraticiens));
    }
    
    public function rechercheAction(Request $request)
    {
        $lesTypes = $this->getDoctrine()->getRepository('CRGSBRBundle:TypePraticien')->findAll();
        $resultat = null;
        if ($request->isMethod('POST')) 
        {
            if(!empty($request->request->get('idTypeMedecin')))
            {
                $type = $request->request->get('idTypeMedecin');
                $resultat = $this->getDoctrine()->getRepository('CRGSBRBundle:Praticien')->findByTypeMedecin($type);
            }
            else
            {
                $nom = $request->request->get('nom');
                $ville = $request->request->get('ville');
                if (!empty($nom) && !empty($ville)) 
                {
                    $resultat = $this->getDoctrine()->getRepository('CRGSBRBundle:Praticien')->findBy(array('nomMedecin' => $nom,'villeMedecin' => $ville));
                }
                else 
                {
                    if(!empty($nom) && empty($ville))
                    {
                        $resultat = $this->getDoctrine()->getRepository('CRGSBRBundle:Praticien')->findByNomMedecin($nom);
                    }
                    else
                    {
                        if( empty($nom) && !empty($ville))
                        {
                            $resultat = $this->getDoctrine()->getRepository('CRGSBRBundle:Praticien')->findByVilleMedecin($ville);
                        }
                        else
                        {
                            $request->getSession()->getFlashBag()->add('danger', 'Veuillez renseigner le nom ou la ville pour la recherche avancer');
                        }
                    }
                }
            }
        }
        return $this->render('CRGSBRBundle:Praticien:recherche.html.twig', array('lesTypes' => $lesTypes,'resultats' => $resultat));
    }
}
