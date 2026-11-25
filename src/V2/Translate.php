<?php

declare(strict_types=1);

namespace DeepLSDK\V2;

final class Translate extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v2/translate [operationId: translateText] */
    /**
     * Request Translation
     *
     * Translate one or more text strings into a target language. Send multiple strings in a
     * single request, within the request size limit, and specify formatting, tag handling,
     * and customization options such as glossaries, style rules, and translation memories.
     */
    public static function post(\DeepLSDK\PostParams\V2\Translate $params): \DeepLSDK\Responses\V2\Translate\Post
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Translate::class)->post($params);
    }

}
