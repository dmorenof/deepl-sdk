<?php

declare(strict_types=1);

namespace DeepLSDK\V2;

final class Languages extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/languages [operationId: getLanguagesV2] */
    /**
     * Retrieve Supported Languages
     *
     * **Deprecated.** Use `GET /v3/languages?resource=translate_text` (or the appropriate resource)
     * instead. See the [migration guide](https://developers.deepl.com/docs/languages/migrating-from-v2-languages)
     * for details.
     *
     * @deprecated
     */
    public static function get(?\DeepLSDK\GetParams\V2\Languages $params = null): \DeepLSDK\Collections\V2\Languages\Get\LanguagesCollection
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Languages::class)->get($params);
    }

}
