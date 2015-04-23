<?php

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MedicamentController extends Controller {

    public function listeAction() {
        $repository = $this
                ->getDoctrine()
                ->getRepository('CRGSBRBundle:Medicament')
        ;

        $listMedicaments = $repository->findAll();

        return $this->render('CRGSBRBundle:Medicament:liste.html.twig', array('lesMedicaments' => $listMedicaments));
    }

    public function rechercheAction(Request $request) {
        $lesFamilles = $this->getDoctrine()->getRepository('CRGSBRBundle:Famille')->findAll();
        $resultat = null;
        if ($request->isMethod('POST')) {
            $famille = $request->request->get('idFamille');
            $resultat = $this->getDoctrine()->getRepository('CRGSBRBundle:Medicament')->findByFamille($famille);
        }
        return $this->render('CRGSBRBundle:Medicament:recherche.html.twig', array('lesFamilles' => $lesFamilles, 'resultats' => $resultat));
    }

}
