<?php

namespace Nico\FormBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ContactRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MailingRepository extends EntityRepository
{
	public function choices(){
		$qb = $this->createQueryBuilder('a');
		 
		$qb->select('a.id,a.nom');
		$queryTabResults = $qb->getQuery()->getArrayResult();
		$tabResults = array();
		foreach ($queryTabResults as $result){
			$tabResults[$result['id']]=$result['nom'];
		}
		return $tabResults;
	}
}
