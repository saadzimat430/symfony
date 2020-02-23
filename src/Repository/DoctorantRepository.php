<?php

namespace App\Repository;

use App\Entity\Doctorant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Doctorant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Doctorant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Doctorant[]    findAll()
 * @method Doctorant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctorantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Doctorant::class);
    }

    // /**
    //  * @return Doctorant[] Returns an array of Doctorant objects
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
    public function findOneBySomeField($value): ?Doctorant
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
