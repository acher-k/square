<?php

namespace App\Repository;

use App\Entity\Canva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Canva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Canva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Canva[]    findAll()
 * @method Canva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CanvaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canva::class);
    }

    // /**
    //  * @return Canva[] Returns an array of Canva objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Canva
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
