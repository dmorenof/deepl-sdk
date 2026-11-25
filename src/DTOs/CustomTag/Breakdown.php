<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\CustomTag;

/**
 * Breakdown of usage by category for a custom tag.
 */
final class Breakdown extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Duration of speech-to-speech usage in minutes.
     * Example: 4.2
     */
    public float $speech_to_speech_minutes;
    /**
     * Duration of speech-to-text usage in minutes.
     * Example: 12.5
     */
    public float $speech_to_text_minutes;
    /**
     * Number of characters used for text improvement.
     * Example: 0
     */
    public int $text_improvement_characters;
    /**
     * Number of characters used for text translation.
     * Example: 380
     */
    public int $text_translation_characters;
    /**
     * Total number of characters used across character-based services. Voice usage is reported in minutes and is not included in this total.
     *
     * Example: 380
     */
    public int $total_characters;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'speech_to_speech_minutes' => is_float($value) ? $this->speech_to_speech_minutes = $value : parent::assignMember($name, $value),
            'speech_to_text_minutes' => is_float($value) ? $this->speech_to_text_minutes = $value : parent::assignMember($name, $value),
            'text_improvement_characters' => is_int($value) ? $this->text_improvement_characters = $value : parent::assignMember($name, $value),
            'text_translation_characters' => is_int($value) ? $this->text_translation_characters = $value : parent::assignMember($name, $value),
            'total_characters' => is_int($value) ? $this->total_characters = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
