<?php

return [
    'name' => 'Application Name',
    'version' => '1.0',
    'type' => 'api', // api | view | service
    'web' => [
        'method' => ['default' => 'http', 'https'],
        'host' => 'southwest.sc',
        'port' => '',
        'base_path' => 'v3',
    ],
    'user_model' => 'App\\models\\User',
    'author' => [
        'name' => 'Corné de Jong',
        'company' => 'SouthCoast',
        'email' => 'hellpo@southcoast.tech',
        'website' => 'southcoast.tech',
    ],
    'default' => [
        'response_object' => '',
        'response_headers' => [
            'X-Application-Name' => 'Application Name',
            'X-Application-Version' => '1.0',
        ],
    ],
];
