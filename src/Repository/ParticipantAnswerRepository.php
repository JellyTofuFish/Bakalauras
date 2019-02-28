<?php

namespace App\Repository;

use App\Entity\ParticipantAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ParticipantAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParticipantAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParticipantAnswer[]    findAll()
 * @method ParticipantAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipantAnswerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ParticipantAnswer::class);
    }

    // /**
    //  * @return ParticipantAnswer[] Returns an array of ParticipantAnswer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParticipantAnswer
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
