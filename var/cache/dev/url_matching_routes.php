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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/sensor/alerts/([^/]++)(?'
                    .'|(*:68)'
                    .'|/edit(*:80)'
                    .'|(*:87)'
                .')'
                .'|/a(?'
                    .'|dmin/sensor/([^/]++)(?'
                        .'|(*:123)'
                        .'|/edit(*:136)'
                        .'|(*:144)'
                    .')'
                    .'|pi/v1/sensor/([^/]++)(?'
                        .'|/(?'
                            .'|me(?'
                                .'|surements(*:195)'
                                .'|trics(*:208)'
                            .')'
                            .'|alerts(*:223)'
                        .')'
                        .'|(*:232)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'sensor_alerts_show', '_controller' => 'App\\Controller\\SensorAlertsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'sensor_alerts_edit', '_controller' => 'App\\Controller\\SensorAlertsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        87 => [[['_route' => 'sensor_alerts_delete', '_controller' => 'App\\Controller\\SensorAlertsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        123 => [[['_route' => 'sensor_detail_show', '_controller' => 'App\\Controller\\SensorDetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        136 => [[['_route' => 'sensor_detail_edit', '_controller' => 'App\\Controller\\SensorDetailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        144 => [[['_route' => 'sensor_detail_delete', '_controller' => 'App\\Controller\\SensorDetailController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        195 => [[['_route' => 'rest_add_sensor_measurement', '_controller' => 'App\\Controller\\SensorMeasurementController::add_sensor_measurement'], ['uuid'], ['POST' => 0], null, false, false, null]],
        208 => [[['_route' => 'rest_get_sensor_metrics', '_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_metrics'], ['uuid'], ['GET' => 0], null, false, false, null]],
        223 => [[['_route' => 'rest_get_sensor_alerts', '_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_alerts'], ['uuid'], ['GET' => 0], null, false, false, null]],
        232 => [
            [['_route' => 'rest_get_sensor_measurement', '_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_measurement'], ['uuid'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
