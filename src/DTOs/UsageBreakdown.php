<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * Breakdown of character usage by category.
 */
final class UsageBreakdown extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of characters used for document translation.
     * Example: 0
     */
    public int $document_translation_characters;
    /**
     * Duration of speech-to-text usage in minutes.
     * Example: 107.46
     */
    public float $speech_to_text_minutes;
    /**
     * Number of characters used for text improvement.
     * Example: 4727
     */
    public int $text_improvement_characters;
    /**
     * Number of characters used for text translation.
     * Example: 4892
     */
    public int $text_translation_characters;
    /**
     * Total number of characters used.
     * Example: 9619
     */
    public int $total_characters;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document_translation_characters' => is_int($value) ? $this->document_translation_characters = $value : parent::assignMember($name, $value),
            'speech_to_text_minutes' => is_float($value) ? $this->speech_to_text_minutes = $value : parent::assignMember($name, $value),
            'text_improvement_characters' => is_int($value) ? $this->text_improvement_characters = $value : parent::assignMember($name, $value),
            'text_translation_characters' => is_int($value) ? $this->text_translation_characters = $value : parent::assignMember($name, $value),
            'total_characters' => is_int($value) ? $this->total_characters = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
