<?php

declare(strict_types=1);

namespace DeepLSDK\V3\TranslationMemories\ByTranslationMemoryId;

final class Segments extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/translation_memories/{translation_memory_id}/segments [operationId: getTranslationMemorySegments] */
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
    public static function get(string $translation_memory_id, ?\DeepLSDK\GetParams\V3\TranslationMemories\ByTranslationMemoryId\Segments $params = null): \DeepLSDK\Responses\V3\TranslationMemories\ByTranslationMemoryId\Segments\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories\ByTranslationMemoryId\Segments::class)->get($translation_memory_id, $params);
    }
}
