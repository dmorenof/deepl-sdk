<?php

declare(strict_types=1);

namespace DeepLSDK\V3\Glossaries\ByGlossaryId;

final class Dictionaries extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** DELETE /v3/glossaries/{glossary_id}/dictionaries [operationId: deleteDictionary] */
    /**
     * Deletes the dictionary associated with the given language pair with the given glossary ID.
     *
     * Delete the dictionary for a single source and target language pair from a glossary,
     * leaving the glossary and its other dictionaries in place.
     */
    public static function delete(string $glossary_id, \DeepLSDK\DeleteParams\V3\Glossaries\ByGlossaryId\Dictionaries $params): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\Glossaries\ByGlossaryId\Dictionaries::class)->delete($glossary_id, $params);
    }

    /** PUT /v3/glossaries/{glossary_id}/dictionaries [operationId: replaceDictionary] */
    /**
     * Replaces or creates a dictionary in the glossary with the specified entries.
     *
     * Replace all entries in the dictionary for a source and target language pair, or create
     * the dictionary if it does not exist yet. Entries not included in the request are removed.
     */
    public static function put(string $glossary_id, ?\DeepLSDK\DTOs\MultilingualGlossary\Entries $payload = null): \DeepLSDK\DTOs\MultilingualGlossary\EntriesInformation
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries\ByGlossaryId\Dictionaries::class)->put($glossary_id);
        }
        return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries\ByGlossaryId\Dictionaries::class)->put($glossary_id, $payload);
    }
}
