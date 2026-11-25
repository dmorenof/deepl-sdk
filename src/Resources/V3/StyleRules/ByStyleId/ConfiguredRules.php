<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\StyleRules\ByStyleId;

final class ConfiguredRules extends \DeepLSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v3/style_rules/{style_id}/configured_rules',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            503 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\ConfiguredRules\\ConfiguredRulesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\ConfiguredRules\\ConfiguredRulesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Style\\RuleList',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\DTOs\\ConfiguredRules',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Replace configured rules for a style rule list
     *
     * Replace the full set of configured rules on a style rule list. Rules not included in
     * the request are removed, so send the complete set you want to keep.
     */
    public function put(string $style_id, \DeepLSDK\DTOs\ConfiguredRules $payload): \DeepLSDK\DTOs\Style\RuleList
    {
        /** @var \DeepLSDK\DTOs\Style\RuleList $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload, path: ['style_id' => $style_id]);
        return $result;
    }

}
