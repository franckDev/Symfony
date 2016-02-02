<?php 
// src/FC/PlatformBundle/Controller/AdvertController.php

namespace FC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
	public function indexAction($page)
	{
		// On vérifie si la page est supérieure à 1
		if ($page < 1) {
			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}

		// Notre liste d'annonce en dur
	    $listAdverts = array(
	      array(
	        'title'   => 'Recherche développpeur Symfony2',
	        'id'      => 1,
	        'author'  => 'Alexandre',
	        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
	        'date'    => new \Datetime()),
	      array(
	        'title'   => 'Mission de webmaster',
	        'id'      => 2,
	        'author'  => 'Hugo',
	        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
	        'date'    => new \Datetime()),
	      array(
	        'title'   => 'Offre de stage webdesigner',
	        'id'      => 3,
	        'author'  => 'Mathieu',
	        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
	        'date'    => new \Datetime())
	    );

	    // Et modifiez le 2nd argument pour injecter notre liste
	    return $this->render('FCPlatformBundle:Advert:index.html.twig', array(
	      'listAdverts' => $listAdverts
	    ));
	}

	public function viewAction($id)
	{
		// Ici on récupérera l'annonce correspondante à l'id $id
		$advert = array(
			'title'	 => 'Recherche développeur Symfony2',
			'id'	 =>	$id,
			'author' =>	'Alexandre',
			'content'=> 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla...',
			'date'	 => new \Datetime()
		);

		return $this->render('FCPlatformBundle:Advert:view.html.twig', array(
			'advert' => $advert
		));
	}

	public function addAction(Request $request)
	{
		// On récupère le service
		$antispam = $this->container->get('fc_platform.antispam');
		var_dump($antispam->getLocale());
		// Je pars du principe que $text contient le texte d'un message quelconque
		$text = '..................................................';
		if ($antispam->isSpam($text)) {
			throw new \Exception('Votre message a été détecté comme spam !');
		}

		// La gestion d'un formulaire est particulière, mais l'idée est la suivante :

		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
		if ($request->isMethod('POST')) {
			// Ici, on s'occupera de la création et de la gestion du formulaire

			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

			// Puis on redirige vers la page de visualisation de cette annonce
			return $this->redirectToRoute('fc_platform_view', array('id' => $id));
		}

		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('FCPlatformBundle:Advert:add.html.twig');
	}

	public function editAction($id, Request $request)
	{
		// Ici, on récupérera l'annonce correspondante à $id
		$advert = array(
			'title'	 => 'Recherche développeur Symfony2',
			'id'	 =>	$id,
			'author' =>	'Alexandre',
			'content'=> 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla...',
			'date'	 => new \Datetime()
		);

		// Même mécanisme que pour l'ajout
		if ($request->isMethod('POST')) {
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

			return $this->redirectToRoute('fc_platform_view', array('id' => $id));
		}

		return $this->render('FCPlatformBundle:Advert:edit.html.twig', array(
			'advert' => $advert
		));
	}

	public function deleteAction($id)
	{
		// Ici, on récupérera l'annonce correspondant à $id

		// Ici, on gérera la suppression de l'annonce en question

		return $this->render('FCPlatformBundle:Advert:delete.html.twig');
	}

	public function menuAction($limit)
	{
		// On fixe en dur une liste ici, bien entendu par la suite
		// on la récupérera depuis la BDD !
		$listAdverts = array(
			array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
			array('id' => 5, 'title' => 'Mission de webmaster'),
			array('id' => 9, 'title' => 'Offre de stage webdesigner')
		);

		return $this->render('FCPlatformBundle:Advert:menu.html.twig', array(
			// Tout l'intérêt est ici : le contrôleur passe
			// les variables nécessaires au template !
			'listAdverts' => $listAdverts
			));
	}

}