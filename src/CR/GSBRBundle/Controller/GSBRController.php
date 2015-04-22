<?php

namespace CR\GSBRBundle\Controller;

use CR\GSBRBundle\Entity\RapportVisite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
    
    public function rechercheMedicamentAction(Request $request)
    {
        $lesFamilles = $this->getDoctrine()->getRepository('CRGSBRBundle:Famille')->findAll();
        $resultat = null;
        if ($request->isMethod('POST')) 
        {
            $famille = $request->request->get('idFamille');
            $resultat = $this->getDoctrine()->getRepository('CRGSBRBundle:Medicament')->findByFamille($famille);
        }
        return $this->render('CRGSBRBundle:GSBR:rechercheMedicament.html.twig', array('lesFamilles' => $lesFamilles,'resultats' => $resultat));
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
    
    public function recherchePraticienAction(Request $request)
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
        return $this->render('CRGSBRBundle:GSBR:recherchePraticien.html.twig', array('lesTypes' => $lesTypes,'resultats' => $resultat));
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
        return $this->render('CRGSBRBundle:GSBR:profil.html.twig', array(
          'form' => $form->createView(),
        ));
        
    }
    public function consulterRapportsVisiteAction()
    {
        $user = $this->getUser();
        $lesRapports = $this->getDoctrine()->getRepository('CRGSBRBundle:RapportVisite')->findByVisiteur($user->getId());
        return $this->render('CRGSBRBundle:GSBR:rapportVisite.html.twig', array('lesRapports' => $lesRapports));
    }
    public function ajouterRapportsVisiteAction(Request $request)
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
        return $this->render('CRGSBRBundle:GSBR:ajouterRapportsVisite.html.twig', array('form' => $form->createView()));
    }
}
