<?php 
// src/FC/PlatformBundle/Controller/AdvertController.php

namespace FC\PlatformBundle\Controller;

use FC\PlatformBundle\Entity\Advert;
use FC\PlatformBundle\Entity\Image;
use FC\PlatformBundle\Entity\Application;
use FC\PlatformBundle\Entity\AdvertSkill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FC\PlatformBundle\Form\AdvertType;

class AdvertController extends Controller
{
	public function indexAction($page)
	{
		$page=1;
		// On vérifie si la page est inférieure à 1
		if($page < 1) {
			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}

		// Ici je fixe le nombre d'annonces par page à 3
		// Mais bien sûr il faudrait utiliser un paramètre, et y accèder via 
		// $this->container->getParameter('nbPerPage')
		$nbPerPage = 6;

		// On récupère notre objet paginator
		$listAdverts = $this->getDoctrine()
							->getManager()
							->getRepository('FCPlatformBundle:Advert')
							->getAdverts($page, $nbPerPage);
		
		// On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
		$nbPages = ceil(count($listAdverts)/$nbPerPage);

		// Si la page n'existe pas , on retourne une 404
		if ($page > $nbPages) {
			throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}

	    // Et on renvoie cette liste vers la vue
	    return $this->render('FCPlatformBundle:Advert:index.html.twig', array(
	      'listAdverts' => $listAdverts,
	      'nbPages'		=> $nbPages,
	      'page'		=> $page
	    ));
	}

	public function viewAction($id)
	{
		// On récupère l'entité manager
		$em = $this->getDoctrine()->getManager();

		// On récupère l'annonce par son id
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($id);

		// On vérifie que l'annonce existe bien avec son id
		if (null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		// On récupére la liste des candidatures de cette annonce
		$listApplications = $em->getRepository('FCPlatformBundle:Application')
							   ->findBy(array('advert' => $advert));

		// On récupère maintenant la liste des compétences
		$listAdvertSkills = $em->getRepository('FCPlatformBundle:AdvertSkill')
							   ->findBy(array('advert' => $advert));

		// On renvoie tout ça à la vue
		return $this->render('FCPlatformBundle:Advert:view.html.twig', array(
		  'advert'			=> $advert,
		  'listApplications'=> $listApplications,
		  'listAdvertSkills'=> $listAdvertSkills
		));
	}

	public function addAction(Request $request)
	{
		// On crée un objet Advert
		$advert = new Advert();

		// On crée le formulaire grâce au service form factory
		$form = $this->createForm(AdvertType::class, $advert);

		// On fait le lien Requête <-> Formulaire
		$form->handleRequest($request);

		// On vérifie que les valeurs entrées soient correctes
		if ($form->isValid()){
			// On l'enregistre notre objet $advert dans la base de données
			$em = $this->getDoctrine()->getManager();
			$em->persist($advert);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

			// Puis on redirige vers la page de visualisation de l'annonce nouvellement créée
			return $this->redirect($this->generateUrl('fc_platform_view', array('id' => $advert->getId())));
		}
		// Pour l'instant pas de candidatures, catégories, etc., on les gérera plus tard

		// On passe la méthode createView() du formulaire à la vue
		// afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('FCPlatformBundle:Advert:add.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function editAction($id)
	{
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();

		// On récupère l'annonce correspondant à l'id $id
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($id);

		// Si l'annonce n'existe pas on affiche une erreur 404
		if(null === $advert) {
			throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
		}

		// On crée le formulaire grâce au service form factory
		$form = $this->createForm(AdvertType::class, $advert);

		// Ici on s'occupera de la création et de la gestion du formulaire

		return $this->render('FCPlatformBundle:Advert:edit.html.twig', array(
			'form' => $form->createView(),
			'advert' => $advert,
		));
	}

	public function deleteAction($id, Request $request)
	{
		var_dump("ça va pas la tête !!");die();
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();

		// On récupère l'annonce correspondante à l'id $id
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($id);

		// Si l'annonce n'existe pas , on affiche une erreur 404
		if(null === $advert) {
			throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
		}

		if ($request->isMethod('POST')) {
			// Si la requête est en POST, on efface l'article

			$request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');

			// Puis on redirige vers l'accueil
			return $this->redirect($this->generateUrl('fc_platform_home'));
		}

		// Si la requête est en GET, on affiche une page de confirmation avant d'effacer
		return $this->render('FCPlatformBundle:Advert:delete.html.twig', array('advert' => $advert));
	}

	public function menuAction($limit = 3)
	{
		$listAdverts = $this->getDoctrine()
							->getManager()
							->getRepository('FCPlatformBundle:Advert')
							->findBy(array(), array('date' => 'desc'), $limit, 0);
		
		return $this->render('FCPlatformBundle:Advert:menu.html.twig', array(
			'listAdverts' => $listAdverts
		));
	}

	public function testAction()
	{
		$em = $this->getDoctrine()->getManager()->getRepository('FCPlatformBundle:Advert');
		$listAdverts = $em->findAll();

		return $this->render('FCPlatformBundle:Test:index.html.twig', array('listAdverts' => $listAdverts));
		// return new Response('Article enregistré avec succès !');
	}
}