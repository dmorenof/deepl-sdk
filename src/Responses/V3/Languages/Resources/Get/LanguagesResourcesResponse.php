<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\Languages\Resources\Get;

final class LanguagesResourcesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'features',
        'name',
    ];

    /**
     * Features supported by this resource. Each feature indicates which languages
     * must support it for the feature to be available — source, target, or both.
     */
    public \DeepLSDK\Collections\V3\Languages\Resources\Get\ResponseItem\ResponseItemFeaturesCollection $features;
    /**
     * The resource identifier.
     * Example: "translate_text"
     */
    public \DeepLSDK\Enums\V3\Languages\Resources\Get\ResponseItem\ResponseItemNameEnum $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = \DeepLSDK\Enums\V3\Languages\Resources\Get\ResponseItem\ResponseItemNameEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
