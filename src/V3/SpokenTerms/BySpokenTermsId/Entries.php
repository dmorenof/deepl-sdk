<?php

declare(strict_types=1);

namespace DeepLSDK\V3\SpokenTerms\BySpokenTermsId;

final class Entries extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/spoken-terms/{spoken_terms_id}/entries [operationId: getSpokenTermsEntries] */
    /**
     * Retrieve Spoken Terms entries
     *
     * Retrieve the actual terms for a specific language from a Spoken Terms collection.
     */
    public static function get(string $spoken_terms_id, \DeepLSDK\GetParams\V3\SpokenTerms\BySpokenTermsId\Entries $params): \DeepLSDK\DTOs\SpokenTerms\Entries
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms\BySpokenTermsId\Entries::class)->get($spoken_terms_id, $params);
    }
}
