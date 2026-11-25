<?php

declare(strict_types=1);

namespace DeepLSDK\V3;

final class Languages extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/languages [operationId: getLanguages] */
    /**
     * Retrieve Languages
     *
     * Returns languages supported by the specified DeepL API resource. Each language indicates whether it can
     * be used as a source language, a target language, or both, along with the features it supports for that
     * resource.
     */
    public static function get(\DeepLSDK\GetParams\V3\Languages $params): \DeepLSDK\Collections\V3\Languages\Get\LanguagesCollection
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Languages::class)->get($params);
    }

}
