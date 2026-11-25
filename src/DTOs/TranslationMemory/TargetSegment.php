<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory;

/**
 * A translation of a source segment in one target language.
 */
final class TargetSegment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'target_language',
        'target_segment_id',
        'target_text',
    ];

    /**
     * The time the translation was added, in the ISO 8601-1:2019 format.
     * Example: "2026-04-01T16:34:25.223Z"
     * Format: date-time
     */
    public string $creation_time;
    /**
     * The time the translation was last applied to a translation request, in the ISO 8601-1:2019
     * format. Absent if it has never been used.
     * Example: "2026-08-05T11:02:18.771Z"
     * Format: date-time
     */
    public string $last_used_time;
    public \DeepLSDK\Enums\TranslationMemory\TargetLanguage $target_language;
    /**
     * A unique ID assigned to the target segment.
     * Example: "9b8a7c6d-5e4f-4a3b-8c2d-1e0f9a8b7c6d"
     */
    public string $target_segment_id;
    /**
     * The translated text.
     * Example: "Dieser Vertrag unterliegt dem Recht der Bundesrepublik Deutschland."
     */
    public string $target_text;
    /**
     * The time the translation was last changed, in the ISO 8601-1:2019 format.
     * Example: "2026-04-01T16:34:25.223Z"
     * Format: date-time
     */
    public string $updated_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'last_used_time' => is_string($value) ? $this->last_used_time = $value : parent::assignMember($name, $value),
            'target_language' => is_string($value) ? $this->target_language = \DeepLSDK\Enums\TranslationMemory\TargetLanguage::from($value) : parent::assignMember($name, $value),
            'target_segment_id' => is_string($value) ? $this->target_segment_id = $value : parent::assignMember($name, $value),
            'target_text' => is_string($value) ? $this->target_text = $value : parent::assignMember($name, $value),
            'updated_time' => is_string($value) ? $this->updated_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
