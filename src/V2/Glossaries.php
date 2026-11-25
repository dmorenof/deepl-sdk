<?php

declare(strict_types=1);

namespace DeepLSDK\V2;

final class Glossaries extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/glossaries [operationId: listGlossaries] */
    /**
     * List all Glossaries
     *
     * List all glossaries and their meta-information, but not the glossary entries.
     */
    public static function get(): \DeepLSDK\Responses\V2\Glossaries\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Glossaries::class)->get();
    }

    /** POST /v2/glossaries [operationId: createGlossary] */
    /**
     * Create a Glossary
     *
     * **For new integrations we recommend `POST /v3/glossaries`**, which supports multiple
     * language pairs in a single glossary.
     *
     * Create a glossary for one source and target language pair and return its `glossary_id`.
     */
    public static function post(\DeepLSDK\DTOs\Create\GlossaryParameters $payload): \DeepLSDK\DTOs\MonolingualGlossary
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Glossaries::class)->post($payload);
    }

    /** DELETE /v2/glossaries/{glossary_id} [operationId: deleteGlossary] */
    /**
     * Delete a Glossary
     *
     * Deletes the specified glossary.
     */
    public static function deleteByGlossaryId(string $glossary_id): void
    {
        self::client()->resource(\DeepLSDK\Resources\V2\Glossaries::class)->deleteByGlossaryId($glossary_id);
    }

    /** GET /v2/glossaries/{glossary_id} [operationId: getGlossary] */
    /**
     * Retrieve Glossary Details
     *
     * Retrieve meta information for a single glossary, omitting the glossary entries.
     */
    public static function getByGlossaryId(string $glossary_id): \DeepLSDK\DTOs\MonolingualGlossary
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Glossaries::class)->getByGlossaryId($glossary_id);
    }

}
