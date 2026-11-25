<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\Glossaries\ByGlossaryId;

final class Entries extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/glossaries/{glossary_id}/entries',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Glossaries\\ByGlossaryId\\Entries\\EntriesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Glossaries\\ByGlossaryId\\Entries\\EntriesStatus503Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V3\\Glossaries\\ByGlossaryId\\Entries\\Get',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve Glossary Entries
     *
     * List the entries of a single glossary in tsv format.
     */
    public function get(string $glossary_id, \DeepLSDK\GetParams\V3\Glossaries\ByGlossaryId\Entries $params): \DeepLSDK\Responses\V3\Glossaries\ByGlossaryId\Entries\Get
    {
        /** @var \DeepLSDK\Responses\V3\Glossaries\ByGlossaryId\Entries\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['glossary_id' => $glossary_id], parameters: $params);
        return $result;
    }
}
