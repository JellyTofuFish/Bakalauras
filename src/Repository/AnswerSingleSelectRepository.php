<?php

namespace App\Repository;

use App\Entity\AnswerSingleSelect;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AnswerSingleSelect|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnswerSingleSelect|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnswerSingleSelect[]    findAll()
 * @method AnswerSingleSelect[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerSingleSelectRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AnswerSingleSelect::class);
    }

    // /**
    //  * @return AnswerSingleSelect[] Returns an array of AnswerSingleSelect objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AnswerSingleSelect
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
