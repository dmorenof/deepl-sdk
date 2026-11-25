<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Admin\Analytics;

final class CustomTags extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v2/admin/analytics/custom-tags',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\Responses\\Errors\\Status400Response',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\Analytics\\CustomTags\\CustomTagsStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\CustomTag\\UsageReport',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
            400 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Get custom tag usage statistics as an admin
     *
     * Retrieve usage statistics broken down by custom tags within a specified date range.
     * Optionally aggregate results by day or over the entire period.
     * Results are paginated; use the `page` parameter with the `next_page` value from
     * a previous response to retrieve subsequent pages.
     */
    public function get(\DeepLSDK\GetParams\V2\Admin\Analytics\CustomTags $params): \DeepLSDK\DTOs\CustomTag\UsageReport
    {
        /** @var \DeepLSDK\DTOs\CustomTag\UsageReport $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
