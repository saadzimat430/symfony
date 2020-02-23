<?php

namespace App\Repository;

use App\Entity\StructureRecherche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StructureRecherche|null find($id, $lockMode = null, $lockVersion = null)
 * @method StructureRecherche|null findOneBy(array $criteria, array $orderBy = null)
 * @method StructureRecherche[]    findAll()
 * @method StructureRecherche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StructureRechercheRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StructureRecherche::class);
    }

    // /**
    //  * @return StructureRecherche[] Returns an array of StructureRecherche objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StructureRecherche
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
