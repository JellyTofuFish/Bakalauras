<?php

namespace App\Repository;

use App\Entity\AnswerOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AnswerOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnswerOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnswerOption[]    findAll()
 * @method AnswerOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerOptionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AnswerOption::class);
    }

    // /**
    //  * @return AnswerOption[] Returns an array of AnswerOption objects
    //  */

}
