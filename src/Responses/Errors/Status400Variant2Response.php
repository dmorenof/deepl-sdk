<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\Errors;

final class Status400Variant2Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * More specific description of the error.
     */
    public string $detail;
    /**
     * Generic description of the error.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
