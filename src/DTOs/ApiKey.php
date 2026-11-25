<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * The API key.
 */
final class ApiKey extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp when the key was created (ISO 8601 format)
     * Example: "2025-07-08T08:15:29.362Z"
     */
    public string $creation_time;
    /**
     * Timestamp when the key was deactivated (ISO 8601 format). The default value is `null`.
     * Example: "2025-07-09T08:15:29.362Z"
     */
    public string $deactivated_time;
    /**
     * Flag indicating whether the API key is deactivated. The default value is `false`.
     * Example: true
     */
    public bool $is_deactivated;
    /**
     * API key ID. Consists of two valid GUIDs separated by a colon.
     */
    public string $key_id;
    /**
     * API key label. The default value is `DeepL API Key`.
     */
    public string $label;
    /**
     * Usage limits for the API key.
     */
    public \DeepLSDK\DTOs\ApiKey\UsageLimitsDTO $usage_limits;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'deactivated_time' => is_string($value) ? $this->deactivated_time = $value : parent::assignMember($name, $value),
            'is_deactivated' => is_bool($value) ? $this->is_deactivated = $value : parent::assignMember($name, $value),
            'key_id' => is_string($value) ? $this->key_id = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
