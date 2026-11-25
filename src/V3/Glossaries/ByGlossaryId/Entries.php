<?php

declare(strict_types=1);

namespace DeepLSDK\V3\Glossaries\ByGlossaryId;

final class Entries extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/glossaries/{glossary_id}/entries [operationId: getMultilingualGlossaryEntries] */
    /**
     * Retrieve Glossary Entries
     *
     * List the entries of a single glossary in tsv format.
     */
    public static function get(string $glossary_id, \DeepLSDK\GetParams\V3\Glossaries\ByGlossaryId\Entries $params): \DeepLSDK\Responses\V3\Glossaries\ByGlossaryId\Entries\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries\ByGlossaryId\Entries::class)->get($glossary_id, $params);
    }
}
