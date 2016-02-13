<?php 
// src/FC/PlatformBundle/Controller/AdvertController.php

namespace FC\PlatformBundle\Controller;

use FC\PlatformBundle\Entity\Advert;
use FC\PlatformBundle\Entity\Image;
use FC\PlatformBundle\Entity\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
		// On récupère le repository
		$repository = $this->getDoctrine()->getManager()->getRepository('FCPlatformBundle:Advert');

		// On récupère l'entité correspondante à l'id $id
		$advert = $repository->find($id);

		// $advert = $this->getDoctrine()->getManager()->find('FCPlatformBundle:Advert', $id);   Façon plus courte

		// Si l'entité renvoie null
		if(null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		// On récupère le repository
		$em = $this->getDoctrine()->getManager()->getRepository('FCPlatformBundle:Application');
		
		// On récupère la liste des candidatures de cette annonce
		$listApplications = $em->findBy(array('advert' => $advert));

		return $this->render('FCPlatformBundle:Advert:view.html.twig', array(
			'advert' => $advert,
			'listApplications' => $listApplications
		));
	}

	public function addAction(Request $request)
	{
		// Création de l'entité
		$advert = new Advert();
		$advert->setTitle('Recherche développeur Symfony2.');
		$advert->setAuthor('Alexandre');
		$advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla....");
		// on peut ne pas définir ni la date ni la publication, car ces attributs sont définis auto dans le constructeur.

		// Création de l'entité Image
		$image = new Image();
		$image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
		$image->setAlt('Job de rêve');

		// Création d'une première candidature
		$application1 = new Application();
		$application1->setAuthor('Marine');
		$application1->setContent("J'ai toutes les qualités requises.");

		// Création d'une deuxième candidature
		$application2 = new Application();
		$application2->setAuthor('Pierre');
		$application2->setContent("Je suis très motivé.");

		// On lie les candidatures à l'annonce
		$application1->setAdvert($advert);
		$application2->setAdvert($advert);

		// On lie l'image à l'annonce
		$advert->setImage($image);

		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();

		// Etape 1 : On " persiste " l'entité
		$em->persist($advert);

		// Etape 1 bis image : si on n'avait pas défini le cascade={"persist"}, on devrait persister à la main l'entité $image
		// $em->persist($image);

		// Etape 1 bis application : pour cette relation pas de cascade lorsqu'on persiste Advert, car la relation est définie 
		// dans l'entité Application et non Advert. On doit donc tout persister à la main ici.
		$em->persist($application1);
		$em->persist($application2);

		// Etape 2 : On déclenche l'enregistrement
		$em->flush();


		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
		if ($request->isMethod('POST')) {
			// Ici, on s'occupera de la création et de la gestion du formulaire
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			// Puis on redirige vers la page de visualisation de cette annonce
			return $this->redirect($this->generateUrl('fc_platform_view', array('id' => $advert->getId())));
		}
		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('FCPlatformBundle:Advert:add.html.twig');
	}

	public function editImageAction($advertId)
	{
		$em = $this->getDoctrine()->getManager();

		// On récupère l'annonce
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($advertId);

		// On modifie l'URL de l'image par exemple
		$advert->getImage()->setUrl('http://lorempixel.com/400/200/');

		// On déclenche la modification
		$em->flush();

		return new Response('OK');
	}

	public function editAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		// On récupère l'annonce $id
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($id);

		if(null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		// La méthode findAll retourne toutes les catégories de la base de données
		$listCategories = $em->getRepository('FCPlatformBundle:Category')->findAll();

		// On boucle sur les catégories pour les lier à l'annonce
		foreach ($listCategories as $category) {
			$advert->addCategory($category);
		}

		// Pour persister le changement dans la relation, il faut persister l'entité propriétaire
		// Ici, Advert est le propriétaire, donc inutile de la persister car on l'a récupérée depuis Doctrine

		// Etape 2 : On déclenche l'enregistrement
		$em->flush();

		// ... reste de la méthode
	}

	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		// On récupère l'annonce $id
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($id);

		if(null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		// On boucle sur les catégories de l'annonce pour les supprimer
		foreach ($advert->getCategories() as $category) {
			$advert->removeCategory($category);
		}

		// Pour persister le changement dans la relation, il faut persister l'entité propriétaire
		// Ici, Advert est le propriétaire, donc inutile de la persister car on l'a récupérée depuis Doctrine

		// On déclenche la modification
		$em->flush();
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