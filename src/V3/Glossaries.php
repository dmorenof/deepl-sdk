<?php

declare(strict_types=1);

namespace DeepLSDK\V3;

final class Glossaries extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/glossaries [operationId: listMultilingualGlossaries] */
    /**
     * List all Glossaries
     *
     * List all glossaries and their meta-information, but not the glossary entries.
     */
    public static function get(): \DeepLSDK\Responses\V3\Glossaries\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries::class)->get();
    }

    /** POST /v3/glossaries [operationId: createMultilingualGlossary] */
    /**
     * Create a Glossary
     *
     * Create a glossary containing one or more dictionaries, each holding entries for a
     * single source and target language pair. Use the returned `glossary_id` with the
     * translation endpoints to apply your own preferred translations.
     */
    public static function post(\DeepLSDK\DTOs\Create\MultilingualGlossaryParameters $payload): \DeepLSDK\DTOs\MultilingualGlossary
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries::class)->post($payload);
    }

    /** DELETE /v3/glossaries/{glossary_id} [operationId: deleteMultilingualGlossary] */
    /**
     * Delete a Glossary
     *
     * Deletes the specified glossary.
     */
    public static function deleteByGlossaryId(string $glossary_id): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\Glossaries::class)->deleteByGlossaryId($glossary_id);
    }

    /** GET /v3/glossaries/{glossary_id} [operationId: getMultilingualGlossary] */
    /**
     * Retrieve Glossary Details
     *
     * Retrieve meta information for a single glossary, omitting the glossary entries.
     */
    public static function getByGlossaryId(string $glossary_id): \DeepLSDK\DTOs\MultilingualGlossary
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries::class)->getByGlossaryId($glossary_id);
    }

    /** PATCH /v3/glossaries/{glossary_id} [operationId: patchMultilingualGlossary] */
    /**
     * Edit glossary details
     *
     * Edit glossary details, such as name or a dictionary for a source and target language.
     */
    public static function patchByGlossaryId(string $glossary_id, \DeepLSDK\DTOs\PatchMultilingualGlossaryParameters $payload): \DeepLSDK\DTOs\MultilingualGlossary
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Glossaries::class)->patchByGlossaryId($glossary_id, $payload);
    }
}
