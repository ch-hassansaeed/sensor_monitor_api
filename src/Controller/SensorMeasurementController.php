<?php

namespace App\Controller;

use App\Entity\BlogPost;
use App\Entity\SensorDetail;
use App\Entity\SensorMeasurement;
use App\Entity\SensorAlerts;
use App\Form\SensorMeasurementType;
use App\Repository\SensorDetailRepository;
use App\Repository\SensorMeasurementRepository;
use ContainerPLMJNBc\getSensorMeasurementControllerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validation;
use \Datetime;


class SensorMeasurementController extends AbstractController
{
    /**
     * @Route("/api/v1/sensor/{uuid}/mesurements", name="rest_add_sensor_measurement",methods={"POST"})
     */
    public function add_sensor_measurement(Request $request,SensorDetailRepository $sensorDetailRepository): Response
    {
        //first make connection and object of database
        $entityManager = $this->getDoctrine()->getManager();

        $uid=$request->get('uuid');
        //first get ID of this sensor(wrt to uuid) from sensordetail entity/table
        $qb = $entityManager->createQueryBuilder();
        //echo $qb->getType();//to check query mode is select for 0 or any other mode
        $qb->select('sd.id')
            ->from('App\Entity\SensorDetail', 'sd')
            ->where("sd.uuid = '".$uid."'");
        $sensor_results=$qb->getQuery()->getResult();
        //to show $sensor_results all rows wrt to where clause
        //echo "<pre>";
        //print_r($sensor_results);
        //echo "</pre>";
        if(!isset($sensor_results) || count($sensor_results)<=0)
            return new JsonResponse("invalid uuid value!", Response::HTTP_BAD_REQUEST);

        $sensor_id=$sensor_results[0]["id"];
        //check the return id of sensor wrt to current input uuid
        //echo "sensor_id::".$sensor_id;
        //die("<br>Test break:i am here");

        $content = $request->getContent();
        //echo $content;//verify json string

        $data = json_decode($content, true);//decode json to get individual parameter

        // uses request data
        $sensor_detail_id = $sensor_id;
        $co_level = isset($data['co2']) ? $data['co2'] : null;
        $reading_datetime = isset($data['time']) ? $data['time'] : null;


        $SensorMeasurement = new SensorMeasurement;
        $sensor_detail=$sensorDetailRepository->find($sensor_detail_id);
        $SensorMeasurement->setSensorId($sensor_detail);
        $SensorMeasurement->setCoLevel($co_level);
        $SensorMeasurement->setReadingDatetime(\DateTime::createFromFormat('Y-m-d H:i:s', $reading_datetime));
        $SensorMeasurement->setRowInsertionDatetime(new \DateTime("now"));

        $validator = Validation::createValidator();

        $errors = $validator->validate($SensorMeasurement);
        if (count($errors) > 0) {
            return $this->json([
                (string) $errors => '400',
            ]);
        }

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($SensorMeasurement);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        //also insert into alert entity if more than 3 time co2_lvl is >= then 2000
        $this->UpdateAlertStatus($co_level, $sensor_detail_id);




        return $this->json([
            'new measurement collected with id:' => $SensorMeasurement->getId(),
        ]);

    }//func::add_sensor_measurement


    /**
     * @Route("/api/v1/sensor/{uuid}", name="rest_get_sensor_measurement",methods={"GET"})
     */
    public function get_sensor_measurement(Request $request): Response
    {
        //first make connection and object of database
        $entityManager = $this->getDoctrine()->getManager();

        $uid=$request->get('uuid');
        //first get ID of this sensor(wrt to uuid) from sensordetail entity/table
        $qb = $entityManager->createQueryBuilder();
        //echo $qb->getType();//to check query mode is select for 0 or any other mode
        $qb->select('sd.id')
            ->from('App\Entity\SensorDetail', 'sd')
            ->where("sd.uuid = '".$uid."'");
        $sensor_results=$qb->getQuery()->getResult();
        //to show $sensor_results all rows wrt to where clause
        //echo "<pre>";
        //print_r($sensor_results);
        //echo "</pre>";
        if(!isset($sensor_results) || count($sensor_results)<=0)
            return new JsonResponse("invalid uuid value!", Response::HTTP_BAD_REQUEST);

        $sensor_id=$sensor_results[0]["id"];
        //check the return id of sensor wrt to current input uuid
        //echo "sensor_id::".$sensor_id;
        //die("<br>Test break:i am here");

        $repository = $this->getDoctrine()
            ->getRepository(SensorMeasurement::class);

        $query = $repository->createQueryBuilder('p')
            ->select('p.co_level')
            ->where("p.sensor_detail = '".$sensor_id."'")
            ->orderBy('p.reading_datetime', 'DESC')
            ->getQuery();

        //$SensorMeasurement_results = $query->getResult();
        /*
        echo "<pre>";
        print_r($SensorMeasurement_results);
        echo "</pre>";
        die("testing:break time");
        //*/
        // to get one result for current input sensor but value should be latest by reading time:
        $latest_reading = $query->setMaxResults(1)->getOneOrNullResult();

        $co_level=$latest_reading["co_level"];
        $response_status_value="";
        if($co_level<2000)
        {
         $response_status_value="OK";
        }
        else if($co_level>=2000)
        {
            $response_status_value="WARN";
            //also check history if more than 3 consective time co level > then 2000 then show alert message
            $check_alert_status_code= $this->getCheckAlertStatus($sensor_id);
            if($check_alert_status_code)
                $response_status_value="ALERT";
        }
        return $this->json([
            'status' => $response_status_value,
        ]);

    }//func::get_sensor_measurement

    /**
     * @Route("/api/v1/sensor/{uuid}/alerts", name="rest_get_sensor_alerts",methods={"GET"})
     */
    public function get_sensor_alerts(Request $request): Response
    {
        //first make connection and object of database
        $entityManager = $this->getDoctrine()->getManager();

        $uid=$request->get('uuid');
        //first get ID of this sensor(wrt to uuid) from sensordetail entity/table
        $qb = $entityManager->createQueryBuilder();
        //echo $qb->getType();//to check query mode is select for 0 or any other mode
        $qb->select('sd.id')
            ->from('App\Entity\SensorDetail', 'sd')
            ->where("sd.uuid = '".$uid."'");
        $sensor_results=$qb->getQuery()->getResult();

        if(!isset($sensor_results) || count($sensor_results)<=0)
            return new JsonResponse("invalid uuid value!", Response::HTTP_BAD_REQUEST);

        $sensor_id=$sensor_results[0]["id"];
        //check the return id of sensor wrt to current input uuid
        //echo "sensor_id::".$sensor_id;

        $qb = $entityManager->createQueryBuilder();
        $select_fields_colmuns = array('sa.co_alert_level', 'sa.startTime', 'sa.endTime');
        $qb->select($select_fields_colmuns)
            ->from('App\Entity\SensorAlerts', 'sa')
            ->where("sa.sensor_detail = '".$sensor_id."' and sa.endTime is not null");
        $sensor_curr_alerts_list=$qb->getQuery()->getResult();

        /*
        echo "<pre>";
        print_r($sensor_curr_alerts_list);
        echo "</pre>";
        die("testing:break time");
        //*/
        // to get the all data of alert entity to show as report as rest josn response
        $alerts_response_arr=array();
        foreach ($sensor_curr_alerts_list as $sensor_curr_alerts_list_element) {
            $co_alert_level= $sensor_curr_alerts_list_element["co_alert_level"];
            $startTime_obj=$sensor_curr_alerts_list_element["startTime"];
            $startTime=$startTime_obj->format('Y-m-d H:i:s');
            $endTime_obj=$sensor_curr_alerts_list_element["endTime"];
            $endTime=$endTime_obj->format('Y-m-d H:i:s');
            $co_alert_level_comma_split_arr=explode(",",$co_alert_level);
            $single_alert_record_arr = ["startTime" => $startTime, "endTime" => $endTime, "mesurement1" => $co_alert_level_comma_split_arr[0], "mesurement2" => $co_alert_level_comma_split_arr[1], "mesurement3" => $co_alert_level_comma_split_arr[2]];
            $alerts_response_arr[]=$single_alert_record_arr;
        }

        return $this->json($alerts_response_arr);

    }//func::get_sensor_alerts

    /**
     * @Route("/api/v1/sensor/{uuid}/metrics", name="rest_get_sensor_metrics",methods={"GET"})
     */
    public function get_sensor_metrics(Request $request): Response
    {
        //first make connection and object of database
        $entityManager = $this->getDoctrine()->getManager();

        $uid=$request->get('uuid');
        //first get ID of this sensor(wrt to uuid) from sensordetail entity/table
        $qb = $entityManager->createQueryBuilder();
        //echo $qb->getType();//to check query mode is select for 0 or any other mode
        $qb->select('sd.id')
            ->from('App\Entity\SensorDetail', 'sd')
            ->where("sd.uuid = '".$uid."'");
        $sensor_results=$qb->getQuery()->getResult();

        if(!isset($sensor_results) || count($sensor_results)<=0)
            return new JsonResponse("invalid uuid value!", Response::HTTP_BAD_REQUEST);

        $sensor_id=$sensor_results[0]["id"];
        //check the return id of sensor wrt to current input uuid
        //echo "sensor_id::".$sensor_id;

        $repository = $this->getDoctrine()
            ->getRepository(SensorMeasurement::class);

        $date_30_days_ago = date('Y-m-d h:i:s', strtotime("-30 days"));

        //for get max value of CO2 level
        $query = $repository->createQueryBuilder('sd')
            ->select('MAX(sd.co_level) AS co_level')
            ->where("sd.sensor_detail = '".$sensor_id."' and sd.reading_datetime BETWEEN :n30days AND :today")
            ->setParameter('today', date('Y-m-d h:i:s'))
            ->setParameter('n30days', $date_30_days_ago);
        $max_co_level = $query->getQuery()->getResult();
        //print_r($max_co_level);
        //for get avg value of CO2 level
        $query = $repository->createQueryBuilder('sd')
            ->select('AVG(sd.co_level) AS avg_co_level')
            ->where("sd.sensor_detail = '".$sensor_id."' and sd.reading_datetime BETWEEN :n30days AND :today")
            ->setParameter('today', date('Y-m-d h:i:s'))
            ->setParameter('n30days', $date_30_days_ago);
        $avg_co_level = $query->getQuery()->getResult();
        //print_r($avg_co_level);

        $max_co_levelInt=(integer)$max_co_level[0]["co_level"];
        $avg_co_levelInt=(integer)$avg_co_level[0]["avg_co_level"];

        return $this->json([
            'maxLast30Days' => $max_co_levelInt,
            'avgLast30Days' => $avg_co_levelInt
        ]);

    }//func::get_sensor_metrics

    //*******************************Functions Start Here ***********************************
    /**
     * @return mixed
     */
    public function getCheckAlertStatus(int $sensor_detail_id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $SensorMeasurementRepository = $this->getDoctrine()
            ->getRepository(SensorMeasurement::class);
        //first get all latest level records values for current sensor:$sensor_detail_id
        $query = $SensorMeasurementRepository->createQueryBuilder('p')
            ->select('p.co_level')
            ->where("p.sensor_detail = '".$sensor_detail_id."'")
            ->orderBy('p.reading_datetime', 'DESC')
            ->setMaxResults(3)
            ->getQuery();

        $SensorMeasurement_last_three_results = $query->getResult();

        //for below if case 2
        $is_consective_3_values_exceed=true;
        foreach ($SensorMeasurement_last_three_results as $SensorMeasurement_last_three_result) {
            //echo $SensorMeasurement_last_three_result["co_level"]."<br>";
            if($SensorMeasurement_last_three_result["co_level"]<2000)
                $is_consective_3_values_exceed=false;
        }
        return $is_consective_3_values_exceed;
    }

    /**
     * @param $co_level
     * @param $sensor_detail_id
     * @return mixed
     */
    public function UpdateAlertStatus($co_level, $sensor_detail_id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $SensorMeasurementRepository = $this->getDoctrine()
            ->getRepository(SensorMeasurement::class);


        //first get all latest level records values for current sensor:$sensor_detail_id
        $select_fields_colmuns = array('p.co_level', 'p.reading_datetime');
        $query = $SensorMeasurementRepository->createQueryBuilder('p')
            ->select($select_fields_colmuns)
            ->where("p.sensor_detail = '".$sensor_detail_id."'")
            ->orderBy('p.reading_datetime', 'DESC')
            ->setMaxResults(3)
            ->getQuery();

        $SensorMeasurement_last_three_results = $query->getResult();
        /*
        echo "<pre>";
        print_r($SensorMeasurement_last_three_results);
        echo "</pre>";
        die("testing:break time");
        //*/

        $curr_sensor_latest_reading_datetime=null;

        //for below if case 1
        $qb = $entityManager->createQueryBuilder();
        //echo $qb->getType();//to check query mode is select for 0 or any other mode
        $qb->select('sa.id')
            ->from('App\Entity\SensorAlerts', 'sa')
            ->where("sa.sensor_detail = '".$sensor_detail_id."' and sa.endTime is null");
        $sensor_alert_latest_alert=$qb->getQuery()->getResult();
        //print_r($sensor_alert_latest_alert);

        //for below if case 2
        $is_consective_3_values_exceed=true;
        $i = 0;
        foreach ($SensorMeasurement_last_three_results as $SensorMeasurement_last_three_result) {
            //echo $SensorMeasurement_last_three_result["co_level"]."<br>";
            $reading_datetime_obj=$SensorMeasurement_last_three_result["reading_datetime"];
            $reading_datetime=$reading_datetime_obj->format('Y-m-d H:i:s');
            //echo $reading_datetime."<br>";
                if($SensorMeasurement_last_three_result["co_level"]<2000)
            $is_consective_3_values_exceed=false;

            if($i == 0) {
             $curr_sensor_latest_reading_datetime= $reading_datetime;
            }
            $i++;
        }

        //now before insert alert data into table check two cases
        //1.current sensor data in alert table should not have any row in wait state(wait state mean no value in endTime)
        //2.and sensor measurement exceed(>2k) has more than 3 values
        if(count($sensor_alert_latest_alert)==0 && $is_consective_3_values_exceed==true) {//mean it need to insert into alert entity
            $entityManager = $this->getDoctrine()->getManager();
            $sensorAlert = new SensorAlerts();
            $SensorDetailRepository = $this->getDoctrine()
                ->getRepository(SensorDetail::class);
            $sensor_detail=$SensorDetailRepository->find($sensor_detail_id);
            $sensorAlert->setSensorId($sensor_detail);
            $sensorAlert->setRowInsertionDatetime(new \DateTime("now"));
            $sensorAlert->setStartTime(\DateTime::createFromFormat('Y-m-d H:i:s', $curr_sensor_latest_reading_datetime));


            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($sensorAlert);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }

        //first get all latest exceed >2k records
        $query = $SensorMeasurementRepository->createQueryBuilder('p')
            ->select('p.co_level')
            ->where("p.sensor_detail = '".$sensor_detail_id."' and p.co_level>2000")
            ->orderBy('p.reading_datetime', 'DESC')
            ->setMaxResults(3)
            ->getQuery();

        $SensorMeasurement_exceed_results = $query->getResult();
        //last latest 3 exceed(>2k) values(comma sperated)
        $sensor_latest_three_levels_comma_sep="";
        foreach ($SensorMeasurement_exceed_results as $SensorMeasurement_exceed_result) {
            $sensor_latest_three_levels_comma_sep=$sensor_latest_three_levels_comma_sep.$SensorMeasurement_exceed_result["co_level"].",";
        }
        $sensor_latest_three_levels_comma_sep=rtrim($sensor_latest_three_levels_comma_sep,",");
        //echo $sensor_latest_three_levels_comma_sep;
        //if exceed value goes less ( <2k )  then update alert table as wait state to end(mean set Endtime as Now time)
        if($co_level<2000) {
            $sensorAlertmode_off = $entityManager->getRepository(SensorAlerts::class)->update_sensoralert_mode_off($sensor_detail_id, $co_level,$curr_sensor_latest_reading_datetime,$sensor_latest_three_levels_comma_sep);
        }


        //die("alert data inserted");
        return true;
    }


}
