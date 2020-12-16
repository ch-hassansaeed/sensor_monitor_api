<?php

namespace App\Repository;

use App\Entity\SensorDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SensorDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorDetail[]    findAll()
 * @method SensorDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SensorDetail::class);
    }

    // /**
    //  * @return SensorDetail[] Returns an array of SensorDetail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SensorDetail
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
