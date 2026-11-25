<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Write;

final class Rephrase extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v2/write/rephrase [operationId: rephraseText] */
    /**
     * Improve text
     *
     * Rewrite one or more texts to improve fluency and readability, optionally targeting a
     * specific writing style or tone. Use the `correct` endpoint instead when you want a
     * minimal spelling and grammar pass rather than broader rewriting.
     */
    public static function post(\DeepLSDK\Requests\V2\Write\Rephrase\Post $payload): \DeepLSDK\Responses\V2\Write\Rephrase\Post
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Write\Rephrase::class)->post($payload);
    }
}
