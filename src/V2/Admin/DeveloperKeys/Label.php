<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Admin\DeveloperKeys;

final class Label extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** PUT /v2/admin/developer-keys/label [operationId: adminRenameDeveloperKey] */
    /**
     * Rename a developer key as an admin
     *
     * Change the label of a developer key. Labels are for your own bookkeeping and do not
     * affect the key's permissions. Requires an Admin API key.
     */
    public static function put(\DeepLSDK\Requests\V2\Admin\DeveloperKeys\Label\Put $payload): \DeepLSDK\DTOs\ApiKey
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Admin\DeveloperKeys\Label::class)->put($payload);
    }

}
