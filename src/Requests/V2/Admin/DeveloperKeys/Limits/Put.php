<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V2\Admin\DeveloperKeys\Limits;

final class Put extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key_id',
    ];

    /**
     * Restricts the number of total characters (across text translation, document translation, and text improvement) that can be consumed by an API key in a one-month usage period.
     *
     * Setting the limit to `0` means the API key will not be able to consume characters.
     * Setting the limit to `null` disables the limit, effectively allowing unlimited usage.
     *
     */
    public float $characters;
    /**
     * API key ID. Consists of two valid GUIDs separated by a colon.
     */
    public string $key_id;
    /**
     * Restricts the number of milliseconds of speech-to-speech that can be consumed by an API key in a one-month usage period.
     * Setting the limit to `0` means the API key will not be able to consume speech-to-speech milliseconds.
     * Setting the limit to `null` disables the limit, effectively allowing unlimited usage.
     *
     */
    public float $speech_to_speech_milliseconds;
    /**
     * Restricts the number of milliseconds of speech-to-text that can be consumed by an API key in a one-month usage period.
     * Setting the limit to `0` means the API key will not be able to consume speech-to-text milliseconds.
     * Setting the limit to `null` disables the limit, effectively allowing unlimited usage.
     *
     */
    public float $speech_to_text_milliseconds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'characters' => is_float($value) ? $this->characters = $value : parent::assignMember($name, $value),
            'key_id' => is_string($value) ? $this->key_id = $value : parent::assignMember($name, $value),
            'speech_to_speech_milliseconds' => is_float($value) ? $this->speech_to_speech_milliseconds = $value : parent::assignMember($name, $value),
            'speech_to_text_milliseconds' => is_float($value) ? $this->speech_to_text_milliseconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
