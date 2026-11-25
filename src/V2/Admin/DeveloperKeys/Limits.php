<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Admin\DeveloperKeys;

final class Limits extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** PUT /v2/admin/developer-keys/limits [operationId: adminSetDeveloperKeyUsageLimits] */
    /**
     * Set developer key usage limits as an admin
     *
     * Set per-key usage limits for characters, speech-to-text milliseconds, and
     * speech-to-speech milliseconds. Requests made with the key fail with HTTP 456
     * once a limit is reached. Requires an Admin API key.
     */
    public static function put(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Limits\Put $payload): \DeepLSDK\DTOs\ApiKey
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\DeveloperKeys\Limits::class)->put($payload);
    }
}
