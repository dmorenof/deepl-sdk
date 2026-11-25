<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory\Job;

/**
 * The parameters the job was created with. Import jobs report `display_name`; export jobs report
 * `translation_memory_id`.
 */
final class ParametersDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The name given to the translation memory the import creates.
     * Example: "Legal"
     */
    public string $display_name;
    /**
     * A unique ID assigned to a translation memory.
     * Format: uuid
     */
    public string $translation_memory_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'translation_memory_id' => is_string($value) ? $this->translation_memory_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
