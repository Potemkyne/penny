<?php

namespace App\Repository;

use App\Entity\NoteFond;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NoteFond|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoteFond|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoteFond[]    findAll()
 * @method NoteFond[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteFondRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoteFond::class);
    }

    // /**
    //  * @return NoteFond[] Returns an array of NoteFond objects
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
    public function findOneBySomeField($value): ?NoteFond
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
