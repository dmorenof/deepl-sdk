<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * Usage statistics for a specific API key and optionally a specific date.
 */
final class KeyUsageItem extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Masked API key identifier.
     * Example: "db96****cb2c"
     */
    public string $api_key;
    /**
     * Label associated with the API key.
     * Example: "DeepL API Key Prod"
     */
    public string $api_key_label;
    public \DeepLSDK\DTOs\UsageBreakdown $usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key' => is_string($value) ? $this->api_key = $value : parent::assignMember($name, $value),
            'api_key_label' => is_string($value) ? $this->api_key_label = $value : parent::assignMember($name, $value),
            'usage' => $value instanceof \stdClass ? $this->usage = new \DeepLSDK\DTOs\UsageBreakdown($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
