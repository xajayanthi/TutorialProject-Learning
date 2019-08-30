<?php

namespace App\Repository;

use App\Entity\Blogarticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Blogarticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blogarticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blogarticle[]    findAll()
 * @method Blogarticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogarticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blogarticle::class);
    }

    // /**
    //  * @return Blogarticle[] Returns an array of Blogarticle objects
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
    public function findOneBySomeField($value): ?Blogarticle
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
