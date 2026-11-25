<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\TranslateJobTargetResult;

/**
 * Details about the processing failure. Only present when `status` is `failed`.
 */
final class ErrorDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * A machine-readable identifier for the error, when available. Clients should match on this value rather than on `message` when branching on error types.
     * Example: "invalid_content_type"
     */
    public string $code;
    /**
     * A human-readable description of the error.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
