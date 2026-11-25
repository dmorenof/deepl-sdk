<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory\JobResult;

/**
 * Why the job failed. Present only when `status` is `failed`.
 */
final class ErrorDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A description of the failure.
     * Example: "The uploaded file is not valid TMX."
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
