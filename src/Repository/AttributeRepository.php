<?php

namespace App\Repository;

use App\Entity\Attribute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Attribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attribute|null findOneBy(array $criteria, array $orderBy = null)
 * @method Attribute[]    findAll()
 * @method Attribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttributeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Attribute::class);
    }

    // /**
    //  * @return Attribute[] Returns an array of Attribute objects
    //  */
    public function findButtonColorAttribute()
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.name = :val')
            ->setParameter('val', 'buttoncolor')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    public function findBackgroundColorAttribute()
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.name = :val')
            ->setParameter('val', 'backgroundcolor')
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
    public function findTimeAttribute()
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.name = :val')
            ->setParameter('val', 'time')
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
    public function findDisplayTimeAttribute()
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.name = :val')
            ->setParameter('val', 'displaytime')
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
    public function findPictureAttribute()
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.name = :val')
            ->setParameter('val', 'picture')
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

}
