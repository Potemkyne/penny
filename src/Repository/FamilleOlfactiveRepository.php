<?php

namespace App\Repository;

use App\Entity\FamilleOlfactive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FamilleOlfactive|null find($id, $lockMode = null, $lockVersion = null)
 * @method FamilleOlfactive|null findOneBy(array $criteria, array $orderBy = null)
 * @method FamilleOlfactive[]    findAll()
 * @method FamilleOlfactive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamilleOlfactiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FamilleOlfactive::class);
    }

    // /**
    //  * @return FamilleOlfactive[] Returns an array of FamilleOlfactive objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FamilleOlfactive
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
