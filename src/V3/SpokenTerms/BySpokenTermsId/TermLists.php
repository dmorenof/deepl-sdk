<?php

declare(strict_types=1);

namespace DeepLSDK\V3\SpokenTerms\BySpokenTermsId;

final class TermLists extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** DELETE /v3/spoken-terms/{spoken_terms_id}/term-lists [operationId: deleteSpokenTermsList] */
    /**
     * Delete a term list
     *
     * Delete a term list for a specific language from the Spoken Terms collection.
     */
    public static function delete(string $spoken_terms_id, \DeepLSDK\DeleteParams\V3\SpokenTerms\BySpokenTermsId\TermLists $params): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms\BySpokenTermsId\TermLists::class)->delete($spoken_terms_id, $params);
    }

    /** PUT /v3/spoken-terms/{spoken_terms_id}/term-lists [operationId: putSpokenTermsList] */
    /**
     * Replace or create a term list
     *
     * Replace an existing term list for a language, or create a new one if it doesn't exist.
     */
    public static function put(string $spoken_terms_id, \DeepLSDK\DTOs\PutSpokenTermsListParameters $payload): \DeepLSDK\DTOs\SpokenTermsList
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms\BySpokenTermsId\TermLists::class)->put($spoken_terms_id, $payload);
    }

}
