<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\SpokenTerms\BySpokenTermsId;

final class Entries extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/spoken-terms/{spoken_terms_id}/entries',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\SpokenTerms\\Entries',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve Spoken Terms entries
     *
     * Retrieve the actual terms for a specific language from a Spoken Terms collection.
     */
    public function get(string $spoken_terms_id, \DeepLSDK\GetParams\V3\SpokenTerms\BySpokenTermsId\Entries $params): \DeepLSDK\DTOs\SpokenTerms\Entries
    {
        /** @var \DeepLSDK\DTOs\SpokenTerms\Entries $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['spoken_terms_id' => $spoken_terms_id], parameters: $params);
        return $result;
    }

}
