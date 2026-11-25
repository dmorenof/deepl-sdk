<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Admin\DeveloperKeys;

final class Deactivate extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** PUT /v2/admin/developer-keys/deactivate [operationId: adminDeactivateDeveloperKey] */
    /**
     * Deactivate a developer key as an admin
     *
     * Deactivate a developer key so it can no longer authenticate API requests.
     * Deactivation is permanent: create a new key to restore access. Requires an Admin API key.
     */
    public static function put(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Deactivate\Put $payload): \DeepLSDK\DTOs\ApiKey
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\DeveloperKeys\Deactivate::class)->put($payload);
    }

}
