<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2;

final class Translate extends \DeepLSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v2/translate',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            414 => null,
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            504 => null,
            529 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            413 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            414 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Translate\\TranslateStatus414Response',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Translate\\TranslateStatus500Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Translate\\TranslateStatus504Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V2\\Translate\\Post',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V2\\Translate\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Request Translation
     *
     * Translate one or more text strings into a target language. Send multiple strings in a
     * single request, within the request size limit, and specify formatting, tag handling,
     * and customization options such as glossaries, style rules, and translation memories.
     */
    public function post(\DeepLSDK\PostParams\V2\Translate $params): \DeepLSDK\Responses\V2\Translate\Post
    {
        /** @var \DeepLSDK\Responses\V2\Translate\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
