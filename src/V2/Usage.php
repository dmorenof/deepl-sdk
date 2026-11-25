<?php

declare(strict_types=1);

namespace DeepLSDK\V2;

final class Usage extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/usage [operationId: getUsage] */
    /**
     * Check Usage and Limits
     *
     * Retrieve character and minute usage for the current billing period together with the
     * corresponding account limits. Poll this endpoint to track consumption and detect when
     * an account is approaching its quota.
     */
    public static function get(): \DeepLSDK\DTOs\UsageResponse
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Usage::class)->get();
    }
}
