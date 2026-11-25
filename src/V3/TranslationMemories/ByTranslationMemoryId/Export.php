<?php

declare(strict_types=1);

namespace DeepLSDK\V3\TranslationMemories\ByTranslationMemoryId;

final class Export extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v3/translation_memories/{translation_memory_id}/export [operationId: createTranslationMemoryExport] */
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
    public static function post(string $translation_memory_id): \DeepLSDK\DTOs\Create\TranslationMemoryExport
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories\ByTranslationMemoryId\Export::class)->post($translation_memory_id);
    }
}
