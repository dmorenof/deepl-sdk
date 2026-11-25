<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Admin;

final class Analytics extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v2/admin/analytics',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\Analytics\\AnalyticsStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\AdminUsageReport',
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
     * Get usage statistics as an admin
     *
     * Retrieve usage statistics for the organization within a specified date range.
     * Optionally group the results by API key or by API key and day.
     */
    public function get(\DeepLSDK\GetParams\V2\Admin\Analytics $params): \DeepLSDK\DTOs\AdminUsageReport
    {
        /** @var \DeepLSDK\DTOs\AdminUsageReport $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
