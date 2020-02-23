<?php

namespace App\Repository;

use App\Entity\DemandeSoutenance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DemandeSoutenance|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeSoutenance|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeSoutenance[]    findAll()
 * @method DemandeSoutenance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeSoutenanceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DemandeSoutenance::class);
    }

    // /**
    //  * @return DemandeSoutenance[] Returns an array of DemandeSoutenance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DemandeSoutenance
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
