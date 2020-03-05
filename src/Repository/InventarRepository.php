<?php

namespace App\Repository;

use App\Entity\Inventar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Inventar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inventar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inventar[]    findAll()
 * @method Inventar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inventar::class);
    }

    // /**
    //  * @return Inventar[] Returns an array of Inventar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inventar
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
