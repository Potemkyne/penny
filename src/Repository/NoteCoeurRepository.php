<?php

namespace App\Repository;

use App\Entity\NoteCoeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NoteCoeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoteCoeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoteCoeur[]    findAll()
 * @method NoteCoeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteCoeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoteCoeur::class);
    }

    // /**
    //  * @return NoteCoeur[] Returns an array of NoteCoeur objects
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
    public function findOneBySomeField($value): ?NoteCoeur
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
