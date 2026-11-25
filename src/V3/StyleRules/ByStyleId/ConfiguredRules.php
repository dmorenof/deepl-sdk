<?php

declare(strict_types=1);

namespace DeepLSDK\V3\StyleRules\ByStyleId;

final class ConfiguredRules extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** PUT /v3/style_rules/{style_id}/configured_rules [operationId: updateStyleRuleConfiguredRules] */
    /**
     * Replace configured rules for a style rule list
     *
     * Replace the full set of configured rules on a style rule list. Rules not included in
     * the request are removed, so send the complete set you want to keep.
     */
    public static function put(string $style_id, \DeepLSDK\DTOs\ConfiguredRules $payload): \DeepLSDK\DTOs\Style\RuleList
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules\ByStyleId\ConfiguredRules::class)->put($style_id, $payload);
    }

}
