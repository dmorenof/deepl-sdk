<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class TranslationMemory extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'segment_count',
        'source_language',
        'target_languages',
        'translation_memory_id',
    ];

    /**
     * The creation time of the translation memory in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Example: "2026-04-01T16:34:25.223Z"
     * Format: date-time
     */
    public string $creation_time;
    /**
     * Name associated with the translation memory.
     * Example: "Legal"
     */
    public string $name;
    /**
     * The number of segments stored in the translation memory.
     * Example: 34
     */
    public int $segment_count;
    public \DeepLSDK\Enums\TranslationMemory\SourceLanguage $source_language;
    /**
     * The list of target languages available in the translation memory.
     * Example: ["es","de"]
     */
    public \DeepLSDK\Collections\TranslationMemory\TargetLanguagesCollection $target_languages;
    /**
     * A unique ID assigned to a translation memory.
     * Format: uuid
     */
    public string $translation_memory_id;
    /**
     * The time of the last update to the translation memory in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Example: "2026-04-01T16:34:25.264Z"
     * Format: date-time
     */
    public string $updated_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'segment_count' => is_int($value) ? $this->segment_count = $value : parent::assignMember($name, $value),
            'source_language' => is_string($value) ? $this->source_language = \DeepLSDK\Enums\TranslationMemory\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'translation_memory_id' => is_string($value) ? $this->translation_memory_id = $value : parent::assignMember($name, $value),
            'updated_time' => is_string($value) ? $this->updated_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
