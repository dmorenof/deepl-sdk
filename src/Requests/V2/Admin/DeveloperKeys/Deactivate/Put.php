<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V2\Admin\DeveloperKeys\Deactivate;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key_id',
    ];

    /**
     * API key ID. Consists of two valid GUIDs separated by a colon.
     */
    public string $key_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key_id' => is_string($value) ? $this->key_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
