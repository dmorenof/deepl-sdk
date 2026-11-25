<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\SpokenTerms\BySpokenTermsId;

final class TermLists extends \DeepLSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/spoken-terms/{spoken_terms_id}/term-lists',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            204,
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
    ];

    /**
     * Delete a term list
     *
     * Delete a term list for a specific language from the Spoken Terms collection.
     */
    public function delete(string $spoken_terms_id, \DeepLSDK\DeleteParams\V3\SpokenTerms\BySpokenTermsId\TermLists $params): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['spoken_terms_id' => $spoken_terms_id], parameters: $params);
        return;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/spoken-terms/{spoken_terms_id}/term-lists',
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
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            415 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\SpokenTermsList',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\DTOs\\PutSpokenTermsListParameters',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Replace or create a term list
     *
     * Replace an existing term list for a language, or create a new one if it doesn't exist.
     */
    public function put(string $spoken_terms_id, \DeepLSDK\DTOs\PutSpokenTermsListParameters $payload): \DeepLSDK\DTOs\SpokenTermsList
    {
        /** @var \DeepLSDK\DTOs\SpokenTermsList $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['spoken_terms_id' => $spoken_terms_id]);
        return $result;
    }

}
