<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation\Failed;

final class ErrorDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
    'message',
];

    /**
     * Machine-readable error code. Currently always `evaluation_failed`.
     * Example: "evaluation_failed"
     */
    public string $code;
    /**
     * Error message.
     * Example: "The evaluation pipeline encountered an unexpected error."
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
