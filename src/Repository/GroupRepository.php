<?php

namespace App\Repository;

use App\Entity\GroupList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method groupList|null find($id, $lockMode = null, $lockVersion = null)
 * @method groupList|null findOneBy(array $criteria, array $orderBy = null)
 * @method groupList[]    findAll()
 * @method groupList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GroupList::class);
    }

    // /**
    //  * @return Group[] Returns an array of Group objects
    //  */

}
