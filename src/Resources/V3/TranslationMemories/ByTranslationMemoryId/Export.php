<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\TranslationMemories\ByTranslationMemoryId;

final class Export extends \DeepLSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/translation_memories/{translation_memory_id}/export',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            200,
            202,
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            409 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            409 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\Export\\ExportStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\ByTranslationMemoryId\\Export\\ExportStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\DeepLSDK\\DTOs\\Create\\TranslationMemoryExport',
                'schemaNullable' => false,
            ],
            202 => [
                'type' => '\\DeepLSDK\\DTOs\\Create\\TranslationMemoryExport',
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
            202 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Export a translation memory
     *
     * Export a translation memory as a TMX file.
     *
     * The export runs as a background job. Poll
     * [Retrieve an import or export job](/api-reference/translation-memory/retrieve-a-translation-memory-job)
     * until the status is `completed`, then download the file from the `download_url` on the job result.
     * That URL is short-lived, so download the file rather than storing the link.
     *
     * If a recent export of the same translation memory is still available, DeepL reuses it and returns
     * `200 OK` with that job instead of starting a new one. Handle both `200` and `202` as success. If a
     * different export of the same translation memory is still running, the request returns
     * `409 Conflict`.
     *
     * Requires an API key with the `translation_memories:read` scope.
     */
    public function post(string $translation_memory_id): \DeepLSDK\DTOs\Create\TranslationMemoryExport
    {
        /** @var \DeepLSDK\DTOs\Create\TranslationMemoryExport $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['translation_memory_id' => $translation_memory_id]);
        return $result;
    }
}
