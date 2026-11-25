<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\Languages\Get\ResponseItem;

final class FeaturesValueResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Availability status of this feature for this language.
     */
    public \DeepLSDK\Enums\V3\Languages\Get\ResponseItem\FeaturesValue\FeaturesValueStatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\V3\Languages\Get\ResponseItem\FeaturesValue\FeaturesValueStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
