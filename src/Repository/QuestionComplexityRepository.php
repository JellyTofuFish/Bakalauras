<?php

namespace App\Repository;

use App\Entity\QuestionComplexity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestionComplexity|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionComplexity|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionComplexity[]    findAll()
 * @method QuestionComplexity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionComplexityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuestionComplexity::class);
    }

    // /**
    //  * @return QuestionComplexity[] Returns an array of QuestionComplexity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionComplexity
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
