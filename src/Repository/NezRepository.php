<?php

namespace App\Repository;

use App\Entity\Nez;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Nez|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nez|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nez[]    findAll()
 * @method Nez[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NezRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nez::class);
    }

    // /**
    //  * @return Nez[] Returns an array of Nez objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nez
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
