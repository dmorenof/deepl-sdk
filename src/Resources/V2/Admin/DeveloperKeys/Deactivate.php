<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Admin\DeveloperKeys;

final class Deactivate extends \DeepLSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v2/admin/developer-keys/deactivate',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\DeveloperKeys\\Deactivate\\DeactivateStatus500Response',
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
            'type' => '\\DeepLSDK\\Requests\\V2\\Admin\\DeveloperKeys\\Deactivate\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Deactivate a developer key as an admin
     *
     * Deactivate a developer key so it can no longer authenticate API requests.
     * Deactivation is permanent: create a new key to restore access. Requires an Admin API key.
     */
    public function put(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Deactivate\Put $payload): \DeepLSDK\DTOs\ApiKey
    {
        /** @var \DeepLSDK\DTOs\ApiKey $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
