<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Write;

final class Correct extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v2/write/correct [operationId: correctText] */
    /**
     * Correct text
     *
     * Fix spelling and grammar errors in one or more texts. Unlike `/v2/write/rephrase`, this endpoint applies
     * a minimal-change correction pass and does not rewrite the text for style or tone.
     */
    public static function post(\DeepLSDK\Requests\V2\Write\Correct\Post $payload): \DeepLSDK\Responses\V2\Write\Correct\Post
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Write\Correct::class)->post($payload);
    }

}
