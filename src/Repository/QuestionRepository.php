<?php

namespace App\Repository;

use App\Entity\Question;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Question|null find($id, $lockMode = null, $lockVersion = null)
 * @method Question|null findOneBy(array $criteria, array $orderBy = null)
 * @method Question[]    findAll()
 * @method Question[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Question::class);
    }

    // /**
    //  * @return Question[] Returns an array of Question objects
    //  */
    public function findQuestionAnswers($question) {
        return $this->createQueryBuilder('q')
            ->select('a.answer')
            ->join('q.answeroptions', 'a')
            ->andWhere('q.id = :val')
            ->setParameter('val', $question)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findAllAndFilterByGroup($group)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.fk_group = :val')
            ->setParameter('val', $group)
            ->getQuery()
            ->getResult();
    }
    public function GroupCountByQuestion($group)
    {
            return $this->createQueryBuilder('q')
                ->select('count(q.id)')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->getQuery()
                ->getSingleScalarResult();
    }

    public function findAllAndSortNameAsc($group)
    {
        if ( $group == 'full' ) {
            return $this->createQueryBuilder('q')
                ->addOrderBy('q.question_name', 'ASC')
                ->getQuery()
                ->getResult();
        }
        else {
            return $this->createQueryBuilder('q')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->addOrderBy('q.question_name', 'ASC')
                ->getQuery()
                ->getResult()
                ;
        }
    }
    public function findAllAndSortTypeAsc($group)
    {
        if ( $group == 'full' ) {
            return $this->createQueryBuilder('q')
                ->addOrderBy('q.type', 'ASC')
                ->getQuery()
                ->getResult();
        }
        else {
            return $this->createQueryBuilder('q')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->addOrderBy('q.type', 'ASC')
                ->getQuery()
                ->getResult()
                ;
        }
    }
    public function findAllAndSortGroupAsc($group)
    {
        if ( $group == 'full' ) {
            return $this->createQueryBuilder('q')
                ->addOrderBy('q.fk_group', 'ASC')
                ->getQuery()
                ->getResult();
        }
        else {
            return $this->createQueryBuilder('q')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->addOrderBy('q.fk_group', 'ASC')
                ->getQuery()
                ->getResult()
                ;
        }
    }
    public function findAllAndSortNameDesc($group)
    {
        if ( $group == 'full' ) {
            return $this->createQueryBuilder('q')
                ->addOrderBy('q.question_name', 'DESC')
                ->getQuery()
                ->getResult();
        }
        else {
            return $this->createQueryBuilder('q')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->addOrderBy('q.question_name', 'DESC')
                ->getQuery()
                ->getResult()
                ;
        }
    }
    public function findAllAndSortTypeDesc($group)
    {
        if ( $group == 'full' ) {
            return $this->createQueryBuilder('q')
                ->addOrderBy('q.type', 'DESC')
                ->getQuery()
                ->getResult();
        }
        else {
            return $this->createQueryBuilder('q')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->addOrderBy('q.type', 'DESC')
                ->getQuery()
                ->getResult()
                ;
        }
    }
    public function findAllAndSortGroupDesc($group)
    {
        if ( $group == 'full' ) {
            return $this->createQueryBuilder('q')
                ->addOrderBy('q.fk_group', 'DESC')
                ->getQuery()
                ->getResult();
        }
        else {
            return $this->createQueryBuilder('q')
                ->andWhere('q.fk_group = :val')
                ->setParameter('val', $group)
                ->addOrderBy('q.fk_group', 'DESC')
                ->getQuery()
                ->getResult()
                ;
        }
    }
}
