<?php

namespace App\Repository;

use App\Entity\Pepe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pepe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pepe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pepe[]    findAll()
 * @method Pepe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PepeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pepe::class);
    }

    // /**
    //  * @return Pepe[] Returns an array of Pepe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pepe
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
