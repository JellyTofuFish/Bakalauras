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

}
