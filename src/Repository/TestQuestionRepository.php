<?php

namespace App\Repository;

use App\Entity\TestQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestQuestion[]    findAll()
 * @method TestQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestQuestionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestQuestion::class);
    }

    // /**
    //  * @return TestQuestion[] Returns an array of TestQuestion objects
    //  */

    public function findQuestionsbyTest($test) {
        return $this->createQueryBuilder('qt')
            ->select('q.question_name')
            ->join('qt.fk_question', 'q')
            ->andWhere('qt.fk_test = :val')
            ->setParameter('val', $test)
            ->getQuery()
            ->getResult()
            ;
    }
}
