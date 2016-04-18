<?php

namespace FC\PlatformBundle\Repository;

use Doctrine\ORM\QueryBuilder;
/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{
	public function myFindAll() // Similaire au findAll()
	{
		// Méthode 1 en passant par l'EntityManager
		$queryBuilder = $this->_em->createQueryBuilder()->select('a')->from($this->_entityName, 'a');
		// Dans un repository, $this->_entityName est le namespace de l'entité gérée
		// Ici, il vaut donc FC\PlatformBundle\Entity\Advert

		// Méthode 2 : en passant par le raccourci (je recommande)
		$queryBuilder = $this->createQueryBuilder('a');

		// On n'ajoute pas de critère ou tri particulier, la construction 
		// de notre requête est finie

		// On récupère la Query à partir du QueryBuilder
		$query = $queryBuilder->getQuery();

		// On récupère les résultats à partir de la Query
		$results = $query->getResult();

		// On retourne ces résultats
		return $results;
	}

	public function myFindAllDQL() // Similaire au findAll() en DQL
	{
		$query = $this->_em->createQuery('SELECT a FROM FCPlatformBundle:Advert a WHERE a.id IN(1, 3, 5)');
		$results = $query->getResult();

		return $results;
	}

	public function myFindOne($id) // Similaire au find($id)
	{
		$qb = $this->createQueryBuilder('a');

		$qb->where('a.id = :id')->setParameter('id', $id);

		return $qb->getQuery()->getResult();
	}

	public function myFindDQL($id) // Similaire au find($id) en DQL
	{
		$query = $this->_em->createQuery('SELECT a FROM FCPlatformBundle:Advert a WHERE a.id = :id');
		$query->setParameter('id', $id);

		//  Utilisation de getSingleResult() car la requête ne doit retourner qu'un seul résultat
		return $query->getSingleResult(); 
	}

	public function findByAuthorAnDate($author, $year) // Deux paramètres author et year
	{
		$year = $year."-00-00 00:00:00"; // On formate une datetime par défaut à partir de l'année choisie
		$qb = $this->createQueryBuilder('a');

		$qb->where('a.author = :author')->setParameter('author', $author)
		   ->andWhere('a.date > :year')->setParameter('year', $year)
		   ->orderBy('a.date', 'DESC');

		return $qb->getQuery()->getResult();
	}

	/** Fonctions de paires **/

	public function whereCurrentYear(QueryBuilder $qb)
	{
		$qb
			->andWhere('a.date BETWEEN :start AND :end')
			->setParameter('start', new \Datetime(date('Y').'-01-01')) // Date entre le 1er janvier de cette année
			->setParameter('end', new \Datetime(date('Y').'-12-31')); // Et le 31 décembre cette année
	}

	public function  myFind()
	{
		$qb = $this->createQueryBuilder('a');

		// On peut ajouter ce qu'on veut avant
		$qb
			->where('a.author = :author')
			->setParameter('author', 'Boris');

		// On applique notre condition sur le QueryBuilder
		$this->whereCurrentYear($qb);

		// On peut ajouter ce qu'on veut après
		$qb->orderBy('a.date', 'DESC');

		return $qb->getQuery()->getResult();
	}

	public function getAdvertWithApplications()
	{
		$qb = $this->createQueryBuilder('a')
				   ->leftJoin('a.applications', 'app')
				   ->addSelect('app');

		return $qb
				  ->getQuery()
				  ->getResult();
				  
	}

	public function getAdvertWithCategories(array $categoryNames)
	{
		$qb = $this->createQueryBuilder('a');

		// On fait une jointure avec l'entité Category avec pour alias "c"
		$qb
			->join('a.categories', 'c')
			->addSelect('c');

		// Puis on filtre sur le nom des catégories à l'aide d'un IN
		$qb->where($qb->expr()->in('c.name', $categoryNames));
		// La syntaxe du IN et d'autres expressions se trouve dans la documentation Doctrine

		// Enfin, on retourne le résultat
		return $qb->getQuery()->getResult();
	}

	public function getAdverts()
	{
		$query = $this->createQueryBuilder('a')
					  ->join('a.image', 'i')
					  ->addSelect('i')
					  ->join('a.categories', 'c')
					  ->addSelect('c')
					  ->orderBy('a.date', 'DESC')
					  ->getQuery();

		return $query->getResult();
	}
}
