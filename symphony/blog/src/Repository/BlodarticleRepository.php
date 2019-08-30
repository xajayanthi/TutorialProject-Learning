<?php

namespace App\Repository;

use App\Entity\Blodarticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Blodarticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blodarticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blodarticle[]    findAll()
 * @method Blodarticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlodarticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blodarticle::class);
    }

    // /**
    //  * @return Blodarticle[] Returns an array of Blodarticle objects
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
    public function findOneBySomeField($value): ?Blodarticle
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
