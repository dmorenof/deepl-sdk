<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\TranslationMemories\ByTranslationMemoryId;

final class Segments extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/translation_memories/{translation_memory_id}/segments',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\Segments\\SegmentsStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\Segments\\SegmentsStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V3\\TranslationMemories\\ByTranslationMemoryId\\Segments\\Get',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * List translation memory segments
     *
     * List the segments stored in a translation memory, one page at a time. Each entry is a source
     * segment with its translations in every target language.
     *
     * This endpoint uses cursor-based pagination rather than the numbered pages used by
     * [List translation memories](/api-reference/translation-memory/list-translation-memories). Omit
     * `page_cursor` on your first call, then pass the `next_page_cursor` from each response to get the
     * following page. When a response has no `next_page_cursor`, you have reached the last page.
     *
     * Requires an API key with the `translation_memories:read` scope.
     */
    public function get(string $translation_memory_id, ?\DeepLSDK\GetParams\V3\TranslationMemories\ByTranslationMemoryId\Segments $params = null): \DeepLSDK\Responses\V3\TranslationMemories\ByTranslationMemoryId\Segments\Get
    {
        /** @var \DeepLSDK\Responses\V3\TranslationMemories\ByTranslationMemoryId\Segments\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['translation_memory_id' => $translation_memory_id], parameters: $params);
        return $result;
    }
}
