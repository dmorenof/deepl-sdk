<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Admin;

final class DeveloperKeys extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v2/admin/developer-keys [operationId: adminGetDeveloperKeys] */
    /**
     * Get all developer keys as an admin
     *
     * List every developer key in your organization, including labels, creation and
     * deactivation timestamps, and any configured usage limits. Requires an Admin API key.
     */
    public static function get(): \DeepLSDK\Collections\V2\Admin\DeveloperKeys\Get\AdminDeveloperKeysCollection
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\DeveloperKeys::class)->get();
    }

    /** POST /v2/admin/developer-keys [operationId: adminCreateDeveloperKey] */
    /**
     * Create a developer key as an admin
     *
     * Create a developer key in your organization with the given label and return its
     * metadata, including the `key_id`. Requires an Admin API key.
     */
    public static function post(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Post $payload): \DeepLSDK\DTOs\ApiKey
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\DeveloperKeys::class)->post($payload);
    }
}
