<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3;

final class TranslationMemories extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/translation_memories',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\TranslationMemoriesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\TranslationMemoriesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V3\\TranslationMemories\\Get',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * List translation memories
     *
     * Retrieve a list of translation memories associated with the authenticated account.
     */
    public function get(?\DeepLSDK\GetParams\V3\TranslationMemories $params = null): \DeepLSDK\Responses\V3\TranslationMemories\Get
    {
        /** @var \DeepLSDK\Responses\V3\TranslationMemories\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_TRANSLATION_MEMORY_ID = [
        'method' => 'DELETE',
        'path' => '/v3/translation_memories/{translation_memory_id}',
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
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\ByTranslationMemoryIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\ByTranslationMemoryIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            204 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Delete a translation memory
     *
     * Delete a translation memory and all of its segments.
     *
     * Deletion is permanent and cannot be undone. Export the translation memory first if you need a
     * copy of its contents. Translation requests that pass the deleted `translation_memory_id` fail
     * after this call, so update your integration before deleting.
     *
     * Requires an API key with the `translation_memories:write` scope.
     */
    public function deleteByTranslationMemoryId(string $translation_memory_id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_TRANSLATION_MEMORY_ID), path: ['translation_memory_id' => $translation_memory_id]);
        return;
    }

    private const array GET_BY_TRANSLATION_MEMORY_ID = [
        'method' => 'GET',
        'path' => '/v3/translation_memories/{translation_memory_id}',
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
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\OneOfGetStatus500\\ByTranslationMemoryIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\OneOfGetStatus503\\ByTranslationMemoryIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\TranslationMemory',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve a translation memory
     *
     * Retrieve a single translation memory by its ID, including its languages and segment count.
     *
     * To read the stored segments themselves, use
     * [List translation memory segments](/api-reference/translation-memory/list-translation-memory-segments).
     *
     * Requires an API key with the `translation_memories:read` scope.
     */
    public function getByTranslationMemoryId(string $translation_memory_id): \DeepLSDK\DTOs\TranslationMemory
    {
        /** @var \DeepLSDK\DTOs\TranslationMemory $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TRANSLATION_MEMORY_ID), path: ['translation_memory_id' => $translation_memory_id]);
        return $result;
    }

}
