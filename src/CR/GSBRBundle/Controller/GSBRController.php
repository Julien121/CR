<?php

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CR\GSBRBundle\Entity\Famille;
use CR\GSBRBundle\Entity\Medicament;
use CR\GSBRBundle\Entity\Praticien;
use CR\GSBRBundle\Entity\RapportVisite;
use CR\GSBRBundle\Entity\TypePraticien;
use CR\GSBRBundle\Entity\Visiteur;
use Symfony\Component\Security\Core\SecurityContext;
class GSBRController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRGSBRBundle:GSBR:index.html.twig');
    }
    
    public function listeMedicamentAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('CRGSBRBundle:Medicament')
        ;
        
        $listMedicaments = $repository->findAll();

         return $this->render('CRGSBRBundle:GSBR:listeMedicament.html.twig', array('lesMedicaments'=> $listMedicaments));
    }
    
    public function listePraticienAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('CRGSBRBundle:Praticien')
        ;
        
        $listPraticiens = $repository->findAll();

         return $this->render('CRGSBRBundle:GSBR:listePraticien.html.twig', array('listPraticiens'=> $listPraticiens));
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
        return $this->render('CRGSBRBundle:GSBR:connexion.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
}
