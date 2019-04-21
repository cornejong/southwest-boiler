<?php

/* Api Config */

use SouthCoast\SouthWest\Base\Response\ApiResponse;

return [
    'version' => 0.010,
    'token_crypt_key' => '3d4d594e5127693a5b4c6b7b5c766d256b2c467134567b7c5e7d5d3a2c',
    'token_model' => 'SouthCoast\SouthWest\Components\Authentication\Token',
    'throwableResponseObject' => 'SouthCoast\\SouthWest\\Base\\Response\\ApiThrowableResponse',
    'default' => [
        'response_format' => ApiResponse::RESPOND_JSON,
        'response_id_format' => 'hash', // hash | guid | uid
    ],
    'autofill_fields' => true,
    'response_body_tag' => 'records',
    'base_response' => [
        /* The Response status */
        'success' => null,
        /* The response status code */
        'status_code' => null,
        /* The api version */
        'version' => null,
        /* The actual api response */
        'records' => null,
        /* The original Request */
        'request' => null,
        /* The response Timestamp */
        'timestamp' => null,
        /* Add the process time */
        'process_time' => null,
        /* Add response Identifier */
        'response_id' => null,
        /* Additional information */
        'additional' => null,
    ],
];
