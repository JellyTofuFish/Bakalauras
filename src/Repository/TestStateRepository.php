<?php

namespace App\Repository;

use App\Entity\TestState;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestState|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestState|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestState[]    findAll()
 * @method TestState[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestStateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestState::class);
    }

    // /**
    //  * @return TestState[] Returns an array of TestState objects
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
    public function findOneBySomeField($value): ?TestState
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
