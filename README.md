# Sensor Monitor Api Application

**this project is made using symfony5 ,Restful Api , mysql and phpunit test.**

**Project Demo Video Link:-**

https://github.com/ch-hassansaeed/sensor_monitor_api/blob/main/Project_Demo_video.mp4

## API Testing
http://127.0.0.1:8000/admin/sensors

it will show the CURD form in which we can view,add,edit and remove sensors

## Problem 1:-
**Reqeust:**
http://127.0.0.1:8000/api/v1/sensor/222-dfs-34-df2-234-fdsf-234/mesurements

{
"co2": 1178,
"time": "2020-10-11 17:17:38"
}

**Response:**
{"new measurement collected with id:":1}

## Problem 2:-
**Reqeust:**
http://127.0.0.1:8000/api/v1/sensor/222-dfs-34-df2-234-fdsf-234

**Response:**
{"status":"OK"}
OR
{"status":"WARN"}
OR
{"status":"ALERT"}

## Problem 3:-
**Reqeust:**
http://127.0.0.1:8000/api/v1/sensor/222-dfs-34-df2-234-fdsf-234/metrics

**Response:**
{"maxLast30Days":2945,"avgLast30Days":2495}

## Problem 4:-
**Reqeust:**
http://127.0.0.1:8000/api/v1/sensor/222-dfs-34-df2-234-fdsf-234/alerts

**Response:**
[

{"startTime":"2020-10-14 17:17:38","endTime":"2020-10-18 18:18:38","mesurement1":"2871","mesurement2":"2671","mesurement3":"2371"},

{"startTime":"2020-12-04 18:18:38","endTime":"2020-12-05 18:18:38","mesurement1":"2945","mesurement2":"2745","mesurement3":"2345"}

]

## symfony Supprtive commands

start the symfony server
```symfony server:start```

create database using
```php bin/console doctrine:database:create```

create or make migration using 
```php bin/console make:migration```

run the migration using 
```php bin/console doctrine:migrations:migrate```

for run all test cases in util folder
 ```php bin/phpunit tests/Util```

## PHP Unit Testing

php bin/phpunit tests/Util
PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

Testing tests/Util
...                                                                 3 / 3 (100%)

Time: 833 ms, Memory: 18.00 MB

OK (3 tests, 3 assertions)


## Database Schema / Design

```
-- phpMyAdmin SQL Dump
-- version 5.0.2
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2020 at 06:23 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sensor_monitor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensor_alerts`
--

DROP TABLE IF EXISTS `sensor_alerts`;
CREATE TABLE IF NOT EXISTS `sensor_alerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sensor_detail_id` int(11) NOT NULL,
  `co_alert_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `row_insertion_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_59EDEE7BA19AAFAE` (`sensor_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sensor_detail`
--

DROP TABLE IF EXISTS `sensor_detail`;
CREATE TABLE IF NOT EXISTS `sensor_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `row_insertion_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sensor_measurement`
--

DROP TABLE IF EXISTS `sensor_measurement`;
CREATE TABLE IF NOT EXISTS `sensor_measurement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sensor_detail_id` int(11) NOT NULL,
  `co_level` int(11) NOT NULL,
  `reading_datetime` datetime NOT NULL,
  `row_insertion_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C435A88CA19AAFAE` (`sensor_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sensor_alerts`
--
ALTER TABLE `sensor_alerts`
  ADD CONSTRAINT `FK_59EDEE7BA19AAFAE` FOREIGN KEY (`sensor_detail_id`) REFERENCES `sensor_detail` (`id`);

--
-- Constraints for table `sensor_measurement`
--
ALTER TABLE `sensor_measurement`
  ADD CONSTRAINT `FK_C435A88CA19AAFAE` FOREIGN KEY (`sensor_detail_id`) REFERENCES `sensor_detail` (`id`);
COMMIT;
```
