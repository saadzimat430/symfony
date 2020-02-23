<?php

namespace App\Repository;

use App\Entity\These;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method These|null find($id, $lockMode = null, $lockVersion = null)
 * @method These|null findOneBy(array $criteria, array $orderBy = null)
 * @method These[]    findAll()
 * @method These[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TheseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, These::class);
    }

    // /**
    //  * @return These[] Returns an array of These objects
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
    public function findOneBySomeField($value): ?These
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
