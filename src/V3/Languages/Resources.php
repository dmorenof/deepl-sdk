<?php

declare(strict_types=1);

namespace DeepLSDK\V3\Languages;

final class Resources extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/languages/resources [operationId: getLanguageResources] */
    /**
     * Retrieve Language Resources
     *
     * Returns all DeepL API resources and the features they support.
     *
     * For each feature, the response indicates which languages must support it for the feature to be
     * available — source only (`needs_source_support`), target only (`needs_target_support`), or both.
     * This allows clients to determine feature availability for a language pair by checking the
     * appropriate language's `features` object returned by `GET /v3/languages`.
     */
    public static function get(): \DeepLSDK\Collections\V3\Languages\Resources\Get\LanguagesResourcesCollection
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Languages\Resources::class)->get();
    }
}
