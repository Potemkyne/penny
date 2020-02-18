<?php

namespace App\Repository;

use App\Entity\NoteTete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NoteTete|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoteTete|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoteTete[]    findAll()
 * @method NoteTete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteTeteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoteTete::class);
    }

    // /**
    //  * @return NoteTete[] Returns an array of NoteTete objects
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
    public function findOneBySomeField($value): ?NoteTete
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
