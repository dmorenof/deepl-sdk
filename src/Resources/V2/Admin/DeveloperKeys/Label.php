<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Admin\DeveloperKeys;

final class Label extends \DeepLSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/v2/admin/developer-keys/label',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\DeveloperKeys\\Label\\LabelStatus500Response',
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
            'type' => '\\DeepLSDK\\Requests\\V2\\Admin\\DeveloperKeys\\Label\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Rename a developer key as an admin
     *
     * Change the label of a developer key. Labels are for your own bookkeeping and do not
     * affect the key's permissions. Requires an Admin API key.
     */
    public function put(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Label\Put $payload): \DeepLSDK\DTOs\ApiKey
    {
        /** @var \DeepLSDK\DTOs\ApiKey $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }
}
