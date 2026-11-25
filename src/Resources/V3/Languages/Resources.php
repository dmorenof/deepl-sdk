<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\Languages;

final class Resources extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/languages/resources',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            503 => null,
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
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Languages\\Resources\\ResourcesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Languages\\Resources\\ResourcesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Collections\\V3\\Languages\\Resources\\Get\\LanguagesResourcesCollection',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve Language Resources
     *
     * Returns all DeepL API resources and the features they support.
     *
     * For each feature, the response indicates which languages must support it for the feature to be
     * available — source only (`needs_source_support`), target only (`needs_target_support`), or both.
     * This allows clients to determine feature availability for a language pair by checking the
     * appropriate language's `features` object returned by `GET /v3/languages`.
     */
    public function get(): \DeepLSDK\Collections\V3\Languages\Resources\Get\LanguagesResourcesCollection
    {
        /** @var \DeepLSDK\Collections\V3\Languages\Resources\Get\LanguagesResourcesCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
