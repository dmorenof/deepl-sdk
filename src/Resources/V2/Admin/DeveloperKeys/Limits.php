<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Admin\DeveloperKeys;

final class Limits extends \DeepLSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v2/admin/developer-keys/limits',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
        ],
        'errorResponses' => [
            400 => [
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
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\DeveloperKeys\\Limits\\LimitsStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\ApiKey',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V2\\Admin\\DeveloperKeys\\Limits\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Set developer key usage limits as an admin
     *
     * Set per-key usage limits for characters, speech-to-text milliseconds, and
     * speech-to-speech milliseconds. Requests made with the key fail with HTTP 456
     * once a limit is reached. Requires an Admin API key.
     */
    public function put(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Limits\Put $payload): \DeepLSDK\DTOs\ApiKey
    {
        /** @var \DeepLSDK\DTOs\ApiKey $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }
}
