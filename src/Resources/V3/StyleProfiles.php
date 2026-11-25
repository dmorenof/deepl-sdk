<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3;

final class StyleProfiles extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v3/style_profiles',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\StyleProfilesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\StyleProfilesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V3\\StyleProfiles\\Get',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * List style profiles
     *
     * Retrieve a list of style profiles available to the authenticated account, newest first.
     *
     * The list includes style profiles that have been shared with the account.
     *
     * Requires an API key with the `style_profiles:read` scope.
     */
    public function get(?\DeepLSDK\GetParams\V3\StyleProfiles $params = null): \DeepLSDK\Responses\V3\StyleProfiles\Get
    {
        /** @var \DeepLSDK\Responses\V3\StyleProfiles\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/style_profiles',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\OneOfPostStatus500\\StyleProfilesStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\OneOfPostStatus503\\StyleProfilesStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Style\\Profile',
        'responseHeaders' => [
            201 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V3\\StyleProfiles\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a style profile
     *
     * Create a style profile. Only `name` is required.
     *
     * If any of the component IDs cannot be used, the request fails and no style profile is created.
     *
     * Requires an API key with the `style_profiles:write` scope.
     */
    public function post(\DeepLSDK\Requests\V3\StyleProfiles\Post $payload): \DeepLSDK\DTOs\Style\Profile
    {
        /** @var \DeepLSDK\DTOs\Style\Profile $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_STYLE_PROFILE_ID = [
        'method' => 'DELETE',
        'path' => '/v3/style_profiles/{style_profile_id}',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\ByStyleProfileId\\ByStyleProfileIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\ByStyleProfileId\\ByStyleProfileIdStatus503Response',
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
     * Delete a style profile
     *
     * Delete a style profile. Only the account that owns a style profile can delete it. A style profile
     * that was shared with your account returns `404 Not Found`.
     *
     * The glossaries, style rule lists and translation memories the style profile links are not deleted.
     * Translation requests that pass the deleted `style_profile_id` fail after this call, so update your
     * integration before deleting.
     *
     * Requires an API key with the `style_profiles:write` scope.
     */
    public function deleteByStyleProfileId(string $style_profile_id): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_STYLE_PROFILE_ID), path: ['style_profile_id' => $style_profile_id]);
        return;
    }

    private const array GET_BY_STYLE_PROFILE_ID = [
        'method' => 'GET',
        'path' => '/v3/style_profiles/{style_profile_id}',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\ByStyleProfileId\\OneOfGetStatus500\\ByStyleProfileIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\ByStyleProfileId\\OneOfGetStatus503\\ByStyleProfileIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Style\\Profile',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve a style profile
     *
     * Retrieve a single style profile by its ID, including the components it links and its timestamps.
     *
     * Requires an API key with the `style_profiles:read` scope.
     */
    public function getByStyleProfileId(string $style_profile_id): \DeepLSDK\DTOs\Style\Profile
    {
        /** @var \DeepLSDK\DTOs\Style\Profile $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_STYLE_PROFILE_ID), path: ['style_profile_id' => $style_profile_id]);
        return $result;
    }

    private const array PATCH_BY_STYLE_PROFILE_ID = [
        'method' => 'PATCH',
        'path' => '/v3/style_profiles/{style_profile_id}',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\ByStyleProfileId\\OneOfPatchStatus500\\ByStyleProfileIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleProfiles\\ByStyleProfileId\\OneOfPatchStatus503\\ByStyleProfileIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Style\\Profile',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V3\\StyleProfiles\\ByStyleProfileId\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update a style profile
     *
     * Update a style profile you own or that was shared with you for editing. Fields you leave out of the
     * request body are not changed.
     *
     * A component list you send replaces the linked list in full. To add a glossary to a style profile
     * that already links two, send all three IDs. To unlink all components in a list, send an empty
     * list.
     *
     * Requires an API key with the `style_profiles:write` scope.
     */
    public function patchByStyleProfileId(string $style_profile_id, \DeepLSDK\Requests\V3\StyleProfiles\ByStyleProfileId\Patch $payload): \DeepLSDK\DTOs\Style\Profile
    {
        /** @var \DeepLSDK\DTOs\Style\Profile $result */
        $result = $this->executeBody(self::operation(self::PATCH_BY_STYLE_PROFILE_ID), $payload, path: ['style_profile_id' => $style_profile_id]);
        return $result;
    }
}
