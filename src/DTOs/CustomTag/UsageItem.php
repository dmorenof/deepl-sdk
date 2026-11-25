<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\CustomTag;

/**
 * Usage statistics for a specific custom tag.
 */
final class UsageItem extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\DTOs\CustomTag\Breakdown $breakdown;
    /**
     * The custom tag identifier.
     * Example: "example-custom-tag"
     */
    public string $custom_tag;
    /**
     * The day the usage was recorded. Only returned when `aggregate_by` is `day`.
     * Example: "2026-05-04T00:00:00Z"
     * Format: date-time
     */
    public string $usage_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'breakdown' => $value instanceof \stdClass ? $this->breakdown = new \DeepLSDK\DTOs\CustomTag\Breakdown($value) : parent::assignMember($name, $value),
            'custom_tag' => is_string($value) ? $this->custom_tag = $value : parent::assignMember($name, $value),
            'usage_date' => is_string($value) ? $this->usage_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
