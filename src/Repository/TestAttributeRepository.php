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

    public function findAllByBackgroundColorDefault()
    {
        return $this->createQueryBuilder('ta')
            ->andWhere('ta.fk_test is NULL')
            ->andWhere('ta.value like :val')
            ->setParameter('val', '%FFFFFF')
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function findAllByButtonColorDefault()
    {
        return $this->createQueryBuilder('ta')
            ->andWhere('ta.fk_test is NULL')
            ->andWhere('ta.value like :val')
            ->setParameter('val', '%007bff')
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findAllByBackgroundColor($value)
    {
        return $this->createQueryBuilder('ta')
            ->join('ta.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'backgroundcolor')
            ->andWhere('ta.fk_test = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
    public function findAllByButtonColor($value)
    {
        return $this->createQueryBuilder('ta')
            ->join('ta.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'buttoncolor')
            ->andWhere('ta.fk_test = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
    public function findAllByTime($value)
    {
        return $this->createQueryBuilder('ta')
            ->join('ta.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'time')
            ->andWhere('ta.fk_test = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
    public function findAllByDisplayTime($value)
    {
        return $this->createQueryBuilder('ta')
            ->join('ta.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'displaytime')
            ->andWhere('ta.fk_test = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
    public function findAllByPicture($value)
    {
        return $this->createQueryBuilder('ta')
            ->join('ta.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'picture')
            ->andWhere('ta.fk_test = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
}
