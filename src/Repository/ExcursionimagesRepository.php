<?php

namespace App\Repository;

use App\Entity\Excursionimages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Excursionimages|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excursionimages|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excursionimages[]    findAll()
 * @method Excursionimages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcursionimagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excursionimages::class);
    }

    // /**
    //  * @return Excursionimages[] Returns an array of Excursionimages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Excursionimages
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
