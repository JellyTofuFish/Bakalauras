<?php

namespace App\Repository;

use App\Entity\Test;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Test|null find($id, $lockMode = null, $lockVersion = null)
 * @method Test|null findOneBy(array $criteria, array $orderBy = null)
 * @method Test[]    findAll()
 * @method Test[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Test::class);
    }

    // /**
    //  * @return Test[] Returns an array of Test objects

    public function filterAllByNameASC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function filterAllByCreatedAtASC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.created_at', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function filterAllByStartASC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.test_start', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function filterAllByEndASC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.test_end', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function filterAllByNameDESC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.name', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function filterAllByCreatedAtDESC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function filterAllByStartDESC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.test_start', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function filterAllByEndDESC()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.test_end', 'DESC')
            ->getQuery()
            ->getResult();
    }

}
