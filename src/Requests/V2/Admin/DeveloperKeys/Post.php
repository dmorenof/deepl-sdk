<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V2\Admin\DeveloperKeys;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * API key label. The default value is `DeepL API Key`.
     */
    public string $label;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
