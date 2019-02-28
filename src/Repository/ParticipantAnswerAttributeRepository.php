<?php

namespace App\Repository;

use App\Entity\ParticipantAnswerAttribute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ParticipantAnswerAttribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParticipantAnswerAttribute|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParticipantAnswerAttribute[]    findAll()
 * @method ParticipantAnswerAttribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipantAnswerAttributeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ParticipantAnswerAttribute::class);
    }

    // /**
    //  * @return ParticipantAnswerAttribute[] Returns an array of ParticipantAnswerAttribute objects
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
    public function findOneBySomeField($value): ?ParticipantAnswerAttribute
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
