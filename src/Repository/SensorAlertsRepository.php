<?php

namespace App\Repository;

use App\Entity\SensorAlerts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SensorAlerts|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorAlerts|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorAlerts[]    findAll()
 * @method SensorAlerts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorAlertsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SensorAlerts::class);
    }

    public function update_sensoralert_mode_off(int $sensor_detail_id,int $co_level,string $curr_sensor_latest_reading_datetime,string $sensor_latest_three_levels_comma_sep): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "
            update sensor_alerts
            set co_alert_level='".$sensor_latest_three_levels_comma_sep."'"."
            ,end_time='".$curr_sensor_latest_reading_datetime."' 
            WHERE sensor_detail_id = ".$sensor_detail_id." and end_time is null
            ";
        $stmt = $conn->executeQuery($sql);

        // returns an array of arrays (i.e. a raw data set)
        return [];
    }
    // /**
    //  * @return SensorAlerts[] Returns an array of SensorAlerts objects
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
    public function findOneBySomeField($value): ?SensorAlerts
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
