<?php

namespace Junior\SiteinterneBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Junior\SiteinterneBundle\Entity\User;


/**
 * DocumentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DocumentRepository extends EntityRepository
{
	public function dateCorrecte($idmission,$signeLe,$typedoc)
	{
		$qb=$this
			->createQueryBuilder('a')
			->leftJoin('a.mission', 'm')
			->addSelect('m')
			->Where('m.id = :id')
			->setParameter('id', $idmission)
		;
		
		$datefinmission = $qb
				->getQuery()
				->setMaxResults(1)
				->getSingleResult()
				->getMission()
				->getDateFin();

		
		
		if($typedoc=="Propale"){
			$datecc = $qb->AndWhere('a.typeDeDocument= :td')
				->setParameter('td', "Convention client")
				->getQuery()
				->getSingleResult()
				->getSigneLe();
				;
			if($datecc != null && $datecc<$signeLe){
				return "La convention client doit être signée après la propale";
			}
		}elseif($typedoc=="Convention client"){
			$datepropale = $qb->AndWhere('a.typeDeDocument= :td')
				->setParameter('td', "Propale")
				->getQuery()
				->getSingleResult()
				->getSigneLe();
				;
			if($datepropale != null && $datepropale>$signeLe){
				return "La convention client doit être signée après la propale";
			}
		}elseif($typedoc=="Récapitulatif mission"){
			$datecc = $qb->AndWhere('a.typeDeDocument= :td')
				->setParameter('td', "Convention client")
				->getQuery()
				->getSingleResult()
				->getSigneLe();
				;
			if($datecc != null && $datecc<$signeLe){
				return "La convention client doit être datée avant les récapitulatifs mission";
			}
		}elseif($typedoc=="PVRF"){
			$datefacture = $qb->AndWhere('a.typeDeDocument= :td')
				->setParameter('td', "Facture")
				->getQuery()
				->getSingleResult()
				->getSigneLe();
				;
			if($datefacture != null && $datefacture<$signeLe){
				return "Le PVRF doit être antérieur à la facture";
			}
			if($datefinmission != null && $datefinmission<$signeLe){
				return "Le PVRF doit être antérieur à la date de fin de mission.";
			}
		}elseif($typedoc=="Rapport pédagogique"){
			$datebv = $qb->AndWhere('a.typeDeDocument= :td')
				->setParameter('td', "Bulletin de versement")
				->getQuery()
				->getSingleResult()
				->getSigneLe();
				;
			if($datebv != null && $datebv<$signeLe){
				return "Le rapport pédagogique doit être antérieur au bulletin de versement";
			}
		}elseif($typedoc=="Bulletin de versement"){
			$daterp = $qb->AndWhere('a.typeDeDocument= :td')
				->setParameter('td', "Rapport pédagogique")
				->getQuery()
				->getSingleResult()
				->getSigneLe();
				;
			if($daterp != null && $daterp>$signeLe){
				return "Le rapport pédagogique doit être antérieur au bulletin de versement";
			}
		}elseif($typedoc=="Avenant" ||$typedoc=="PVRI"){
			if($datefinmission != null && $datefinmission<$signeLe){
				return "Ce document doit être antérieur à la date de fin de mission.";
			}
		}
		
		return 'ok';
	}
}