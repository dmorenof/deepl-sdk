<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Admin;

final class Analytics extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/admin/analytics [operationId: adminGetAnalytics] */
    /**
     * Get usage statistics as an admin
     *
     * Retrieve usage statistics for the organization within a specified date range.
     * Optionally group the results by API key or by API key and day.
     */
    public static function get(\DeepLSDK\GetParams\V2\Admin\Analytics $params): \DeepLSDK\DTOs\AdminUsageReport
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\Analytics::class)->get($params);
    }

}
