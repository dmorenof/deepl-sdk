<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\StyleRules\ByStyleId;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name associated with the style rule list.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
