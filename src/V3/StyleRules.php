<?php

declare(strict_types=1);

namespace DeepLSDK\V3;

final class StyleRules extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/style_rules [operationId: getStyleRuleLists] */
    /**
     * Retrieve style rule lists
     *
     * List the style rule lists in your account. Results are paginated. Set `detailed` to
     * include each list's configured rules and custom instructions.
     */
    public static function get(?\DeepLSDK\GetParams\V3\StyleRules $params = null): \DeepLSDK\Responses\V3\StyleRules\Get
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules::class)->get($params);
    }

    /** POST /v3/style_rules [operationId: createStyleRuleList] */
    /**
     * Create a style rule list
     *
     * Create a style rule list for a single language, optionally with its configured rules
     * and custom instructions. The `language` can be a root code such as `de` or a variant
     * code such as `de-CH`. Use the returned `style_id` with the translation endpoints
     * to apply the list.
     */
    public static function post(\DeepLSDK\Requests\V3\StyleRules\Post $payload): \DeepLSDK\DTOs\Style\RuleList
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules::class)->post($payload);
    }

    /** DELETE /v3/style_rules/{style_id} [operationId: deleteStyleRuleList] */
    /**
     * Delete a style rule list
     *
     * Delete a style rule list and its custom instructions. Requests that reference the
     * deleted `style_id` fail afterwards.
     */
    public static function deleteByStyleId(string $style_id): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\StyleRules::class)->deleteByStyleId($style_id);
    }

    /** GET /v3/style_rules/{style_id} [operationId: getStyleRuleList] */
    /**
     * Get a style rule list
     *
     * Retrieve a single style rule list, including its configured rules and custom instructions.
     */
    public static function getByStyleId(string $style_id): \DeepLSDK\DTOs\Style\RuleList
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules::class)->getByStyleId($style_id);
    }

    /** PATCH /v3/style_rules/{style_id} [operationId: updateStyleRuleList] */
    /**
     * Update a style rule list's name
     *
     * Rename a style rule list. This does not change its configured rules or custom instructions.
     */
    public static function patchByStyleId(string $style_id, \DeepLSDK\Requests\V3\StyleRules\ByStyleId\Patch $payload): \DeepLSDK\DTOs\Style\RuleList
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules::class)->patchByStyleId($style_id, $payload);
    }

}
