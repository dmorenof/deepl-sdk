<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\Languages\Resources\Get\ResponseItem;

final class ResponseItemFeaturesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    /**
     * The feature identifier, corresponding to keys in the `features` object returned by `GET /v3/languages`.
     */
    public \DeepLSDK\Enums\V3\Languages\Resources\Get\ResponseItem\FeaturesItem\FeaturesItemNameEnum $name;
    /**
     * If `true`, the source language must support this feature for it to be available. Defaults to `false` if absent.
     */
    public bool $needs_source_support;
    /**
     * If `true`, the target language must support this feature for it to be available. Defaults to `false` if absent.
     */
    public bool $needs_target_support;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = \DeepLSDK\Enums\V3\Languages\Resources\Get\ResponseItem\FeaturesItem\FeaturesItemNameEnum::from($value) : parent::assignMember($name, $value),
            'needs_source_support' => is_bool($value) ? $this->needs_source_support = $value : parent::assignMember($name, $value),
            'needs_target_support' => is_bool($value) ? $this->needs_target_support = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
