<?php

namespace App\Repository;

use App\Entity\Jury;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Jury|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jury|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jury[]    findAll()
 * @method Jury[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JuryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Jury::class);
    }

    // /**
    //  * @return Jury[] Returns an array of Jury objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jury
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
