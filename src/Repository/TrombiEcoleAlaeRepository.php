<?php

namespace App\Repository;

use App\Entity\TrombiEcoleAlae;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrombiEcoleAlae|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrombiEcoleAlae|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrombiEcoleAlae[]    findAll()
 * @method TrombiEcoleAlae[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrombiEcoleAlaeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrombiEcoleAlae::class);
    }

    // /**
    //  * @return TrombiEcoleAlae[] Returns an array of TrombiEcoleAlae objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrombiEcoleAlae
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
