<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Create\TranslationMemoryExport;

final class ParametersDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A unique ID assigned to a translation memory.
     * Format: uuid
     */
    public string $translation_memory_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'translation_memory_id' => is_string($value) ? $this->translation_memory_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
