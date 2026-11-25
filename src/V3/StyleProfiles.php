<?php

declare(strict_types=1);

namespace DeepLSDK\V3;

final class StyleProfiles extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/style_profiles [operationId: listStyleProfiles] */
    /**
     * List style profiles
     *
     * Retrieve a list of style profiles available to the authenticated account, newest first.
     *
     * The list includes style profiles that have been shared with the account.
     *
     * Requires an API key with the `style_profiles:read` scope.
     */
    public static function get(?\DeepLSDK\GetParams\V3\StyleProfiles $params = null): \DeepLSDK\Responses\V3\StyleProfiles\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleProfiles::class)->get($params);
    }

    /** POST /v3/style_profiles [operationId: createStyleProfile] */
    /**
     * Create a style profile
     *
     * Create a style profile. Only `name` is required.
     *
     * If any of the component IDs cannot be used, the request fails and no style profile is created.
     *
     * Requires an API key with the `style_profiles:write` scope.
     */
    public static function post(\DeepLSDK\Requests\V3\StyleProfiles\Post $payload): \DeepLSDK\DTOs\Style\Profile
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleProfiles::class)->post($payload);
    }

    /** DELETE /v3/style_profiles/{style_profile_id} [operationId: deleteStyleProfile] */
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
    public static function deleteByStyleProfileId(string $style_profile_id): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\StyleProfiles::class)->deleteByStyleProfileId($style_profile_id);
    }

    /** GET /v3/style_profiles/{style_profile_id} [operationId: getStyleProfile] */
    /**
     * Retrieve a style profile
     *
     * Retrieve a single style profile by its ID, including the components it links and its timestamps.
     *
     * Requires an API key with the `style_profiles:read` scope.
     */
    public static function getByStyleProfileId(string $style_profile_id): \DeepLSDK\DTOs\Style\Profile
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleProfiles::class)->getByStyleProfileId($style_profile_id);
    }

    /** PATCH /v3/style_profiles/{style_profile_id} [operationId: updateStyleProfile] */
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
    public static function patchByStyleProfileId(string $style_profile_id, \DeepLSDK\Requests\V3\StyleProfiles\ByStyleProfileId\Patch $payload): \DeepLSDK\DTOs\Style\Profile
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleProfiles::class)->patchByStyleProfileId($style_profile_id, $payload);
    }
}
