<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class DocumentTranslationError extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * detailed error message
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
