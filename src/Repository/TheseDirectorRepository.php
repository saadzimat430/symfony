<?php

namespace App\Repository;

use App\Entity\TheseDirector;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TheseDirector|null find($id, $lockMode = null, $lockVersion = null)
 * @method TheseDirector|null findOneBy(array $criteria, array $orderBy = null)
 * @method TheseDirector[]    findAll()
 * @method TheseDirector[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TheseDirectorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TheseDirector::class);
    }

    // /**
    //  * @return TheseDirector[] Returns an array of TheseDirector objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TheseDirector
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
