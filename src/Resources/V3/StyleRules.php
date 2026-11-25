<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3;

final class StyleRules extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/style_rules',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\StyleRulesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\StyleRulesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V3\\StyleRules\\Get',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve style rule lists
     *
     * List the style rule lists in your account. Results are paginated. Set `detailed` to
     * include each list's configured rules and custom instructions.
     */
    public function get(?\DeepLSDK\GetParams\V3\StyleRules $params = null): \DeepLSDK\Responses\V3\StyleRules\Get
    {
        /** @var \DeepLSDK\Responses\V3\StyleRules\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/style_rules',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\OneOfPostStatus500\\StyleRulesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\OneOfPostStatus503\\StyleRulesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Style\\RuleList',
        'responseHeaders' => [
            201 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V3\\StyleRules\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a style rule list
     *
     * Create a style rule list for a single language, optionally with its configured rules
     * and custom instructions. The `language` can be a root code such as `de` or a variant
     * code such as `de-CH`. Use the returned `style_id` with the translation endpoints
     * to apply the list.
     */
    public function post(\DeepLSDK\Requests\V3\StyleRules\Post $payload): \DeepLSDK\DTOs\Style\RuleList
    {
        /** @var \DeepLSDK\DTOs\Style\RuleList $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_STYLE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/style_rules/{style_id}',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            204,
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\ByStyleIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\ByStyleIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            204 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Delete a style rule list
     *
     * Delete a style rule list and its custom instructions. Requests that reference the
     * deleted `style_id` fail afterwards.
     */
    public function deleteByStyleId(string $style_id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_STYLE_ID), path: ['style_id' => $style_id]);
        return;
    }

    private const array GET_BY_STYLE_ID = [
        'method' => 'GET',
        'path' => '/v3/style_rules/{style_id}',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\OneOfGetStatus500\\ByStyleIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\OneOfGetStatus503\\ByStyleIdStatus503Response',
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
    ];

    /**
     * Get a style rule list
     *
     * Retrieve a single style rule list, including its configured rules and custom instructions.
     */
    public function getByStyleId(string $style_id): \DeepLSDK\DTOs\Style\RuleList
    {
        /** @var \DeepLSDK\DTOs\Style\RuleList $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_STYLE_ID), path: ['style_id' => $style_id]);
        return $result;
    }

    private const array PATCH_BY_STYLE_ID = [
        'method' => 'PATCH',
        'path' => '/v3/style_rules/{style_id}',
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
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\OneOfPatchStatus500\\ByStyleIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\OneOfPatchStatus503\\ByStyleIdStatus503Response',
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
            'type' => '\\DeepLSDK\\Requests\\V3\\StyleRules\\ByStyleId\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update a style rule list's name
     *
     * Rename a style rule list. This does not change its configured rules or custom instructions.
     */
    public function patchByStyleId(string $style_id, \DeepLSDK\Requests\V3\StyleRules\ByStyleId\Patch $payload): \DeepLSDK\DTOs\Style\RuleList
    {
        /** @var \DeepLSDK\DTOs\Style\RuleList $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_STYLE_ID), $payload, path: ['style_id' => $style_id]);
        return $result;
    }
}
