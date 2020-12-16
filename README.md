# hassan Sensor Monitor Api Application

**this project is made using symfony and mysql and phpunit test.**

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


## PHP Unit Testing

php bin/phpunit tests/Util
PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

Testing tests/Util
...                                                                 3 / 3 (100%)

Time: 833 ms, Memory: 18.00 MB

OK (3 tests, 3 assertions)



