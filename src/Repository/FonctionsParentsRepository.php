<?php

namespace App\Repository;

use App\Entity\FonctionsParents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FonctionsParents|null find($id, $lockMode = null, $lockVersion = null)
 * @method FonctionsParents|null findOneBy(array $criteria, array $orderBy = null)
 * @method FonctionsParents[]    findAll()
 * @method FonctionsParents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FonctionsParentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FonctionsParents::class);
    }

    // /**
    //  * @return FonctionsParents[] Returns an array of FonctionsParents objects
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
    public function findOneBySomeField($value): ?FonctionsParents
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
