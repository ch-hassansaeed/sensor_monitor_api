<?php

namespace App\Repository;

use App\Entity\SensorMeasurement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SensorMeasurement|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorMeasurement|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorMeasurement[]    findAll()
 * @method SensorMeasurement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorMeasurementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SensorMeasurement::class);
    }

    // /**
    //  * @return SensorMeasurement[] Returns an array of SensorMeasurement objects
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
    public function findOneBySomeField($value): ?SensorMeasurement
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
