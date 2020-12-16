<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/sensor/alerts' => [[['_route' => 'sensor_alerts_index', '_controller' => 'App\\Controller\\SensorAlertsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sensor/alerts/new' => [[['_route' => 'sensor_alerts_new', '_controller' => 'App\\Controller\\SensorAlertsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/sensors' => [[['_route' => 'sensor_detail_index', '_controller' => 'App\\Controller\\SensorDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/sensor/new' => [[['_route' => 'sensor_detail_new', '_controller' => 'App\\Controller\\SensorDetailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/sensor/alerts/([^/]++)(?'
                    .'|(*:33)'
                    .'|/edit(*:45)'
                    .'|(*:52)'
                .')'
                .'|/a(?'
                    .'|dmin/sensor/([^/]++)(?'
                        .'|(*:88)'
                        .'|/edit(*:100)'
                        .'|(*:108)'
                    .')'
                    .'|pi/v1/sensor/([^/]++)(?'
                        .'|/(?'
                            .'|me(?'
                                .'|surements(*:159)'
                                .'|trics(*:172)'
                            .')'
                            .'|alerts(*:187)'
                        .')'
                        .'|(*:196)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'sensor_alerts_show', '_controller' => 'App\\Controller\\SensorAlertsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'sensor_alerts_edit', '_controller' => 'App\\Controller\\SensorAlertsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'sensor_alerts_delete', '_controller' => 'App\\Controller\\SensorAlertsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        88 => [[['_route' => 'sensor_detail_show', '_controller' => 'App\\Controller\\SensorDetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        100 => [[['_route' => 'sensor_detail_edit', '_controller' => 'App\\Controller\\SensorDetailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        108 => [[['_route' => 'sensor_detail_delete', '_controller' => 'App\\Controller\\SensorDetailController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        159 => [[['_route' => 'rest_add_sensor_measurement', '_controller' => 'App\\Controller\\SensorMeasurementController::add_sensor_measurement'], ['uuid'], ['POST' => 0], null, false, false, null]],
        172 => [[['_route' => 'rest_get_sensor_metrics', '_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_metrics'], ['uuid'], ['GET' => 0], null, false, false, null]],
        187 => [[['_route' => 'rest_get_sensor_alerts', '_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_alerts'], ['uuid'], ['GET' => 0], null, false, false, null]],
        196 => [
            [['_route' => 'rest_get_sensor_measurement', '_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_measurement'], ['uuid'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
