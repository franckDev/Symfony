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

class AdvertController extends Controller
{
	public function indexAction($page)
	{
		// On vérifie si la page est supérieure à 1
		if($page < 1) {
			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}
		// On récupère la liste de toutes les annonces
		$listAdverts = $this->getDoctrine()
							->getManager()
							->getRepository('FCPlatformBundle:Advert')
							->getAdverts();
		// echo"<pre>";					
		// var_dump($listAdverts[0]);
		// echo"</pre>";
		// die();
	    // Et on renvoie cette liste vers la vue
	    return $this->render('FCPlatformBundle:Advert:index.html.twig', array(
	      'listAdverts' => $listAdverts
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
		// La gestion d'un formulaire est la suivante :

		if ($request->isMethod('POST')){
			// Ici on s'occupera de la création du formulaire

			$request->getSession()->getFlashBag()->add('info', 'Annonce bien enregistrée.');

			// Puis on redirige vers la page de visualisation de cet article
			return $this->redirect($this->generateUrl('fc_platform_view', array('id' => 1)));
		}
		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('FCPlatformBundle:Advert:add.html.twig');
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

		// Ici on s'occupera de la création et de la gestion du formulaire

		return $this->render('FCPlatformBundle:Advert:edit.html.twig',array('advert' => $advert));
	}

	public function deleteAction($id, Request $request)
	{
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