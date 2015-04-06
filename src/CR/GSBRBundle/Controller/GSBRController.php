<?php

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CR\GSBRBundle\Entity\Famille;
use CR\GSBRBundle\Entity\Medicament;
use CR\GSBRBundle\Entity\Praticien;
use CR\GSBRBundle\Entity\RapportVisite;
use CR\GSBRBundle\Entity\TypePraticien;
use CR\GSBRBundle\Entity\Visiteur;
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
}
