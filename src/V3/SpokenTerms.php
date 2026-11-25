<?php

declare(strict_types=1);

namespace DeepLSDK\V3;

final class SpokenTerms extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/spoken-terms [operationId: listSpokenTerms] */
    /**
     * List all Spoken Terms collections
     *
     * List all Spoken Terms collections and their metadata, but not the actual terms.
     */
    public static function get(): \DeepLSDK\Responses\V3\SpokenTerms\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms::class)->get();
    }

    /** POST /v3/spoken-terms [operationId: createSpokenTerms] */
    /**
     * Create Spoken Terms collection
     *
     * Create a new Spoken Terms collection with one or more term lists. Each term list contains terms for a single language. The number of collections per account is limited by your plan.
     */
    public static function post(\DeepLSDK\DTOs\Create\SpokenTermsParameters $payload): \DeepLSDK\DTOs\SpokenTerms
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms::class)->post($payload);
    }

    /** DELETE /v3/spoken-terms/{spoken_terms_id} [operationId: deleteSpokenTerms] */
    /**
     * Delete Spoken Terms collection
     *
     * Delete the entire Spoken Terms collection.
     */
    public static function deleteBySpokenTermsId(string $spoken_terms_id): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms::class)->deleteBySpokenTermsId($spoken_terms_id);
    }

    /** GET /v3/spoken-terms/{spoken_terms_id} [operationId: getSpokenTerms] */
    /**
     * Retrieve Spoken Terms collection details
     *
     * Retrieve metadata for a Spoken Terms collection, including term list information but not the actual terms.
     */
    public static function getBySpokenTermsId(string $spoken_terms_id): \DeepLSDK\DTOs\SpokenTerms
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms::class)->getBySpokenTermsId($spoken_terms_id);
    }

    /** PATCH /v3/spoken-terms/{spoken_terms_id} [operationId: patchSpokenTerms] */
    /**
     * Edit Spoken Terms collection details
     *
     * Update the name of a Spoken Terms collection or merge new entries into an existing term list.
     */
    public static function patchBySpokenTermsId(string $spoken_terms_id, \DeepLSDK\DTOs\PatchSpokenTermsParameters $payload): \DeepLSDK\DTOs\SpokenTerms
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\SpokenTerms::class)->patchBySpokenTermsId($spoken_terms_id, $payload);
    }

}
