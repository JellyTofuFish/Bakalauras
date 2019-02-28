<?php

namespace App\Repository;

use App\Entity\TestParticipation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestParticipation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestParticipation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestParticipation[]    findAll()
 * @method TestParticipation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestParticipationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestParticipation::class);
    }

    // /**
    //  * @return TestParticipation[] Returns an array of TestParticipation objects
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
    public function findOneBySomeField($value): ?TestParticipation
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
