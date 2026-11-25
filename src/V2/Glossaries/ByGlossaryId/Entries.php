<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Glossaries\ByGlossaryId;

final class Entries extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/glossaries/{glossary_id}/entries [operationId: getGlossaryEntries] */
    /**
     * Retrieve Glossary Entries
     *
     * List the entries of a single glossary in the format specified by the `Accept` header.
     */
    public static function get(string $glossary_id, ?\DeepLSDK\GetParams\V2\Glossaries\ByGlossaryId\Entries $params = null): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Glossaries\ByGlossaryId\Entries::class)->get($glossary_id, $params);
    }
}
