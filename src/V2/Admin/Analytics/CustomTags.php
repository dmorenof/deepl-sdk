<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Admin\Analytics;

final class CustomTags extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/admin/analytics/custom-tags [operationId: adminGetCustomTagAnalytics] */
    /**
     * Get custom tag usage statistics as an admin
     *
     * Retrieve usage statistics broken down by custom tags within a specified date range.
     * Optionally aggregate results by day or over the entire period.
     * Results are paginated; use the `page` parameter with the `next_page` value from
     * a previous response to retrieve subsequent pages.
     */
    public static function get(\DeepLSDK\GetParams\V2\Admin\Analytics\CustomTags $params): \DeepLSDK\DTOs\CustomTag\UsageReport
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\Analytics\CustomTags::class)->get($params);
    }
}
