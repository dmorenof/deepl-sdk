<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2;

final class GlossaryLanguagePairs extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v2/glossary-language-pairs',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\Responses\\Errors\\Status400Variant2Response',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            415 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            503 => null,
            529 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\Status400Variant2Response',
                'schemaNullable' => false,
            ],
            401 => [
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\GlossaryLanguagePairs\\GlossaryLanguagePairsStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\GlossaryLanguagePairs\\GlossaryLanguagePairsStatus503Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V2\\GlossaryLanguagePairs\\Get',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * List Language Pairs Supported by Glossaries
     *
     * **Deprecated.** Use `GET /v3/languages?resource=glossary` instead, which returns per-language
     * availability including source and target roles.
     *
     * Retrieve the list of language pairs supported by the glossary feature.
     *
     * @deprecated
     */
    public function get(): \DeepLSDK\Responses\V2\GlossaryLanguagePairs\Get
    {
        /** @var \DeepLSDK\Responses\V2\GlossaryLanguagePairs\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
