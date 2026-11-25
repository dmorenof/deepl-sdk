<?php

declare(strict_types=1);

namespace DeepLSDK\V2;

final class GlossaryLanguagePairs extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/glossary-language-pairs [operationId: listGlossaryLanguages] */
    /**
     * List Language Pairs Supported by Glossaries
     *
     * **Deprecated.** Use `GET /v3/languages?resource=glossary` instead, which returns per-language
     * availability including source and target roles.
     *
     * Retrieve the list of language pairs supported by the glossary feature.
     *
     * @deprecated
     */
    public static function get(): \DeepLSDK\Responses\V2\GlossaryLanguagePairs\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\GlossaryLanguagePairs::class)->get();
    }

}
