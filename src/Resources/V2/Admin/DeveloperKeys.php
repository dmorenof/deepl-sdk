<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2\Admin;

final class DeveloperKeys extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v2/admin/developer-keys',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\DeveloperKeys\\DeveloperKeysStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Collections\\V2\\Admin\\DeveloperKeys\\Get\\AdminDeveloperKeysCollection',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Get all developer keys as an admin
     *
     * List every developer key in your organization, including labels, creation and
     * deactivation timestamps, and any configured usage limits. Requires an Admin API key.
     */
    public function get(): \DeepLSDK\Collections\V2\Admin\DeveloperKeys\Get\AdminDeveloperKeysCollection
    {
        /** @var \DeepLSDK\Collections\V2\Admin\DeveloperKeys\Get\AdminDeveloperKeysCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v2/admin/developer-keys',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Admin\\DeveloperKeys\\OneOfPostStatus500\\DeveloperKeysStatus500Response',
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
            'type' => '\\DeepLSDK\\Requests\\V2\\Admin\\DeveloperKeys\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a developer key as an admin
     *
     * Create a developer key in your organization with the given label and return its
     * metadata, including the `key_id`. Requires an Admin API key.
     */
    public function post(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Post $payload): \DeepLSDK\DTOs\ApiKey
    {
        /** @var \DeepLSDK\DTOs\ApiKey $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
