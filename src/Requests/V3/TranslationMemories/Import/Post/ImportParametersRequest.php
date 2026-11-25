<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\TranslationMemories\Import\Post;

final class ImportParametersRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name to give the new translation memory. If you omit this, the translation memory
     * is created without a name.
     * Example: "Legal"
     */
    public string $display_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
