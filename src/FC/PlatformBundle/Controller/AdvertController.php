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
		$em = $this->getDoctrine()->getManager();

		// on récupère l'annonce $id
		$advert = $em->getRepository('FCPlatformBundle:Advert')->find($id);

		if (null === $advert) {
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		// On avait déjà récupéré la liste des candidatures
		$listApplications = $em->getRepository('FCPlatformBundle:Application')->findBy(array('advert' => $advert));

		// On récupère maintenant la liste AdvertSkill
		$listAdvertSkills = $em->getRepository('FCPlatformBundle:AdvertSkill')->findBy(array('advert' => $advert));

		return $this->render('FCPlatformBundle:Advert:view.html.twig', array(
		  'advert'			=> $advert,
		  'listApplications'=> $listApplications,
		  'listAdvertSkills'=> $listAdvertSkills
		));
	}

	public function addAction(Request $request)
	{
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();

		// Création de l'entité Advert
		$advert = new Advert();
		$advert->setTitle('Recherche développeur Symfony2.');
		$advert->setAuthor('Alexandre');
		$advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon.Blabla...");

		// On récupère toutes les compétences possibles
		$listSkills = $em->getRepository('FCPlatformBundle:Skill')->findAll();

		// Pour chaque compétence
		foreach ($listSkills as $Skill) {
			// On crée une nouvelle " relation entre 1 annonce et 1 compétence "
			$advertSkill = new AdvertSkill();

			// On la lie à l'annonce, qui ici toujours la même
			$advertSkill->setAdvert($advert);
			// On la lie à la compétence, qui change ici dans la boucle foreach
			$advertSkill->setSkill($Skill);

			// Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
			$advertSkill->setLevel('Expert');

			// Et bien sùr, on persiste cette entité de relation, propriétaire des autres relations
			$em->persist($advertSkill);
		}

		// Doctrine ne connait pas encore l'entité $advert. Si vous n'avez pas définit la relation AdvertSkill
		// avec un cascade persist (ce qui est le cas si vous avez utilisé mon code), alors on doit persister $advert
		$em->persist($advert);

		// On déclenche l'enregistrement
		$em->flush();

		// Reste de la méthode qu'on avait déjà écrit
	    if ($request->isMethod('POST')) {
	      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	      return $this->redirect($this->generateUrl('fc_platform_view', array('id' => $advert->getId())));
	    }

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
		$repository = $this->getDoctrine()->getManager()->getRepository('FCPlatformBundle:Advert');

		$listAdverts = $repository->findBy(
							array(),
							array('date' => 'desc'),
							$limit,
							0
						);
		
		return $this->render('FCPlatformBundle:Advert:menu.html.twig', array(
		// Tout l'intérêt est ici : le contrôleur passe
		// les variables nécessaires au template !
		'listAdverts' => $listAdverts
		));
	}

	public function testAction()
	{
		$repository = $this->getDoctrine()->getManager()->getRepository('FCPlatformBundle:Advert');

		// $advert = $repository->find(1);

		// return $this->render('FCPlatformBundle:Test:index.html.twig', array('advert' => $advert));

		$advert = $repository->findOneBy(array('author' => 'Boris'));

		return $this->render('FCPlatformBundle:Test:index.html.twig', array('advert' => $advert));
	}
}