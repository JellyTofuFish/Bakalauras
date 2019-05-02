<?php

namespace App\Repository;

use App\Entity\QuestionAttribute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestionAttribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionAttribute|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionAttribute[]    findAll()
 * @method QuestionAttribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionAttributeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuestionAttribute::class);
    }

    // /**
    //  * @return QuestionAttribute[] Returns an array of QuestionAttribute objects
    //  */
    public function findAllByBackgroundColor($value)
    {
        return$this->createQueryBuilder('qa')
            ->join('qa.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'backgroundcolor')
            ->andWhere('qa.fk_question = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
    public function findAllByButtonColor($value)
    {
        return $this->createQueryBuilder('qa')
            ->join('qa.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'buttoncolor')
            ->andWhere('qa.fk_question = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }
    public function findAllByTime($value)
    {
        $qb = $this->createQueryBuilder('qa')
            ->join('qa.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'time')
            ->andWhere('qa.fk_question = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
        return $qb
            ;
    }
    public function findAllByDisplayTime($value)
    {
        $qb = $this->createQueryBuilder('qa')
            ->join('qa.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'displaytime')
            ->andWhere('qa.fk_question = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
        return $qb
            ;
    }
    public function findAllByPicture($value)
    {
        $qb = $this->createQueryBuilder('qa')
            ->join('qa.fk_attribute', 'a')
            ->where("a.name = :attribute")
            ->setParameter('attribute', 'picture')
            ->andWhere('qa.fk_question = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
        return $qb
            ;
    }
}
