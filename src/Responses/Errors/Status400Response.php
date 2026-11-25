<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\Errors;

final class Status400Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error message describing the issue.
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
