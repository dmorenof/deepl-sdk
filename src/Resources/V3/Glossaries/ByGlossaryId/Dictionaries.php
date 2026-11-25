<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\Glossaries\ByGlossaryId;

final class Dictionaries extends \DeepLSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v3/glossaries/{glossary_id}/dictionaries',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            204,
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Glossaries\\ByGlossaryId\\Dictionaries\\DictionariesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Glossaries\\ByGlossaryId\\Dictionaries\\DictionariesStatus503Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Deletes the dictionary associated with the given language pair with the given glossary ID.
     *
     * Delete the dictionary for a single source and target language pair from a glossary,
     * leaving the glossary and its other dictionaries in place.
     */
    public function delete(string $glossary_id, \DeepLSDK\DeleteParams\V3\Glossaries\ByGlossaryId\Dictionaries $params): void
    {
        $this->executeArguments(self::operation(self::DELETE), path: ['glossary_id' => $glossary_id], parameters: $params);
        return;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/glossaries/{glossary_id}/dictionaries',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Glossaries\\ByGlossaryId\\Dictionaries\\OneOfPutStatus500\\DictionariesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\Glossaries\\ByGlossaryId\\Dictionaries\\OneOfPutStatus503\\DictionariesStatus503Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\MultilingualGlossary\\EntriesInformation',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\DTOs\\MultilingualGlossary\\Entries',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Replaces or creates a dictionary in the glossary with the specified entries.
     *
     * Replace all entries in the dictionary for a source and target language pair, or create
     * the dictionary if it does not exist yet. Entries not included in the request are removed.
     */
    public function put(string $glossary_id, ?\DeepLSDK\DTOs\MultilingualGlossary\Entries $payload = null): \DeepLSDK\DTOs\MultilingualGlossary\EntriesInformation
    {
        /** @var \DeepLSDK\DTOs\MultilingualGlossary\EntriesInformation $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT), $payload, path: ['glossary_id' => $glossary_id]) : $this->executeArguments(self::operation(self::PUT), path: ['glossary_id' => $glossary_id]);
        return $result;
    }
}
