<?php

namespace App\Repository;

use App\Entity\TestAttribute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestAttribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestAttribute|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestAttribute[]    findAll()
 * @method TestAttribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestAttributeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestAttribute::class);
    }

    // /**
    //  * @return TestAttribute[] Returns an array of TestAttribute objects
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
    public function findOneBySomeField($value): ?TestAttribute
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
