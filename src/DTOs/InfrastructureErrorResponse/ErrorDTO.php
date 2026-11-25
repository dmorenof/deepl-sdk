<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\InfrastructureErrorResponse;

final class ErrorDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
];

    /**
     * A human-readable description of the error.
     * Example: "Bad Gateway."
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
