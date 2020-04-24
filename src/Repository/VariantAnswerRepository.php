<?php

namespace App\Repository;

use App\Entity\VariantAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VariantAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method VariantAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method VariantAnswer[]    findAll()
 * @method VariantAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VariantAnswerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VariantAnswer::class);
    }

    // /**
    //  * @return VariantAnswer[] Returns an array of VariantAnswer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VariantAnswer
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
