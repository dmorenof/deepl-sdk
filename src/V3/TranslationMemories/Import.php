<?php

declare(strict_types=1);

namespace DeepLSDK\V3\TranslationMemories;

final class Import extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v3/translation_memories/import [operationId: createTranslationMemoryImport] */
    /**
     * Import a translation memory
     *
     * Create a translation memory by importing a TMX file.
     *
     * This endpoint does not accept the file itself. It returns a short-lived `upload_url`, and you
     * upload the TMX file to that URL with a separate `PUT` request. Processing starts automatically
     * once the upload completes, so there is no third call to confirm it.
     *
     * 1. `POST /v3/translation_memories/import` with the file's name and size. The response returns a
     *    `job_id`, an `upload_url`, and the `expires_at` time after which the URL stops working.
     * 2. `PUT` the TMX file to `upload_url`. Do not send your `Authorization` header on this request,
     *    because the URL is already signed.
     * 3. Poll [Retrieve an import or export job](/api-reference/translation-memory/retrieve-a-translation-memory-job)
     *    until the status is `completed`. The new `translation_memory_id` is on the job result.
     *
     * Requires an API key with the `translation_memories:write` scope.
     */
    public static function post(\DeepLSDK\Requests\V3\TranslationMemories\Import\Post $payload): \DeepLSDK\Responses\V3\TranslationMemories\Import\Post
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories\Import::class)->post($payload);
    }

}
