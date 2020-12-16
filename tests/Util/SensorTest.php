<?php


// tests/Util/SensorTest.php
namespace App\Tests\Util;


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SensorTest extends WebTestCase
{
    //to test that for invalid uuid rest api request send response should be 400
    public function testSensorApi_Invalid_UUID_TEST()
    {
        $client = static::createClient();
        $uuid="this-is-invalid-uid";
        $client->request('GET', '/api/v1/sensor/'.$uuid);

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }

    //to test that for valid uuid rest api request send response as 200
    public function testSensorApi_valid_UUID_TEST()
    {
        $client = static::createClient();
        $uuid="222-dfs-34-df2-234-fdsf-234";
        $client->request('GET', '/api/v1/sensor/'.$uuid);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    //to test that status of sensor if <2k then ok
    public function testSensorApi_Check_Status_ok()
    {
        $client = static::createClient();
        $uuid="222-dfs-34-df2-234-fdsf-234";
        $client->request('GET', '/api/v1/sensor/'.$uuid);
        $response_text_json=$client->getResponse()->getContent();
        $response_text_arr=json_decode($response_text_json, true);
        $response_text_status_value=$response_text_arr["status"];
        //echo "check status value:".$response_text_status_value;
        $this->assertEquals("OK", $response_text_status_value);
    }

}