<?php

namespace App\Repository;

use App\Entity\Blogentries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Blogentries|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blogentries|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blogentries[]    findAll()
 * @method Blogentries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogentriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blogentries::class);
    }

    // /**
    //  * @return Blogentries[] Returns an array of Blogentries objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Blogentries
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
