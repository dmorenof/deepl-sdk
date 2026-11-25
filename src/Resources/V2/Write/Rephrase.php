<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Write;

final class Rephrase extends \DeepLSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v2/write/rephrase',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            415 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            504 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            413 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            415 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Write\\Rephrase\\RephraseStatus500Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Write\\Rephrase\\RephraseStatus504Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V2\\Write\\Rephrase\\Post',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V2\\Write\\Rephrase\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Improve text
     *
     * Rewrite one or more texts to improve fluency and readability, optionally targeting a
     * specific writing style or tone. Use the `correct` endpoint instead when you want a
     * minimal spelling and grammar pass rather than broader rewriting.
     */
    public function post(\DeepLSDK\Requests\V2\Write\Rephrase\Post $payload): \DeepLSDK\Responses\V2\Write\Rephrase\Post
    {
        /** @var \DeepLSDK\Responses\V2\Write\Rephrase\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
