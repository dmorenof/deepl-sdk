<?php

declare(strict_types=1);

namespace DeepLSDK\V3;

final class TranslationMemories extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/translation_memories [operationId: listTranslationMemories] */
    /**
     * List translation memories
     *
     * Retrieve a list of translation memories associated with the authenticated account.
     */
    public static function get(?\DeepLSDK\GetParams\V3\TranslationMemories $params = null): \DeepLSDK\Responses\V3\TranslationMemories\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories::class)->get($params);
    }

    /** DELETE /v3/translation_memories/{translation_memory_id} [operationId: deleteTranslationMemory] */
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
    public static function deleteByTranslationMemoryId(string $translation_memory_id): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories::class)->deleteByTranslationMemoryId($translation_memory_id);
    }

    /** GET /v3/translation_memories/{translation_memory_id} [operationId: getTranslationMemory] */
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
    public static function getByTranslationMemoryId(string $translation_memory_id): \DeepLSDK\DTOs\TranslationMemory
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories::class)->getByTranslationMemoryId($translation_memory_id);
    }

}
