<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class UsageResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Only present for API Pro users. Total characters used by this API key in the current period.
     * Example: 636
     */
    public int $api_key_character_count;
    /**
     * Only present for API Pro users. Character limit for this API key in the current period.
     * Example: 1000000000000
     */
    public int $api_key_character_limit;
    /**
     * Characters translated so far in the current billing period.
     * Example: 180118
     * Format: int64
     */
    public int $character_count;
    /**
     * Current maximum number of characters that can be translated per billing period. If cost control is set, the cost control limit will be returned in this field.
     * Example: 1250000
     * Format: int64
     */
    public int $character_limit;
    /**
     * Documents translated so far in the current billing period. Only present for accounts with a document limit.
     * Format: int64
     */
    public int $document_count;
    /**
     * Current maximum number of documents that can be translated per billing period. Only present for accounts with a document limit.
     * Format: int64
     */
    public int $document_limit;
    /**
     * Only present for API Pro users. End time of the current billing period (ISO 8601).
     * Example: "2025-06-13T09:18:42Z"
     * Format: date-time
     */
    public string $end_time;
    /**
     * Only present for API Pro users. Per-product usage details.
     */
    public \DeepLSDK\Collections\UsageResponse\ProductsCollection $products;
    /**
     * Only present for API Pro users. Minutes of speech-to-speech used in the current period. Milliseconds are rounded up to the nearest minute.
     * Example: 12
     */
    public int $speech_to_speech_minutes_count;
    /**
     * Only present for API Pro users. Maximum minutes of speech-to-speech that can be used in the current billing period.
     * Example: 600
     */
    public int $speech_to_speech_minutes_limit;
    /**
     * Deprecated. Always returns 0. Use speech_to_text_minutes_count instead.
     * Example: 0
     *
     * @deprecated
     */
    public int $speech_to_text_milliseconds_count;
    /**
     * Deprecated. Always returns 0. Use speech_to_text_minutes_limit instead.
     * Example: 0
     *
     * @deprecated
     */
    public int $speech_to_text_milliseconds_limit;
    /**
     * Only present for API Pro users. Minutes of speech-to-text used in the current period. Milliseconds are rounded up to the nearest minute.
     * Example: 30
     */
    public int $speech_to_text_minutes_count;
    /**
     * Only present for API Pro users. Maximum minutes of speech-to-text that can be used in the current billing period.
     * Example: 600
     */
    public int $speech_to_text_minutes_limit;
    /**
     * Only present for API Pro users. Start time of the current billing period (ISO 8601).
     * Example: "2025-05-13T09:18:42Z"
     * Format: date-time
     */
    public string $start_time;
    /**
     * Documents translated by all users in the team so far in the current billing period. Only present for accounts with a team document limit.
     * Format: int64
     */
    public int $team_document_count;
    /**
     * Current maximum number of documents that can be translated by the team per billing period. Only present for accounts with a team document limit.
     * Format: int64
     */
    public int $team_document_limit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_key_character_count' => is_int($value) ? $this->api_key_character_count = $value : parent::assignMember($name, $value),
            'api_key_character_limit' => is_int($value) ? $this->api_key_character_limit = $value : parent::assignMember($name, $value),
            'character_count' => is_int($value) ? $this->character_count = $value : parent::assignMember($name, $value),
            'character_limit' => is_int($value) ? $this->character_limit = $value : parent::assignMember($name, $value),
            'document_count' => is_int($value) ? $this->document_count = $value : parent::assignMember($name, $value),
            'document_limit' => is_int($value) ? $this->document_limit = $value : parent::assignMember($name, $value),
            'end_time' => is_string($value) ? $this->end_time = $value : parent::assignMember($name, $value),
            'speech_to_speech_minutes_count' => is_int($value) ? $this->speech_to_speech_minutes_count = $value : parent::assignMember($name, $value),
            'speech_to_speech_minutes_limit' => is_int($value) ? $this->speech_to_speech_minutes_limit = $value : parent::assignMember($name, $value),
            'speech_to_text_milliseconds_count' => is_int($value) ? $this->speech_to_text_milliseconds_count = $value : parent::assignMember($name, $value),
            'speech_to_text_milliseconds_limit' => is_int($value) ? $this->speech_to_text_milliseconds_limit = $value : parent::assignMember($name, $value),
            'speech_to_text_minutes_count' => is_int($value) ? $this->speech_to_text_minutes_count = $value : parent::assignMember($name, $value),
            'speech_to_text_minutes_limit' => is_int($value) ? $this->speech_to_text_minutes_limit = $value : parent::assignMember($name, $value),
            'start_time' => is_string($value) ? $this->start_time = $value : parent::assignMember($name, $value),
            'team_document_count' => is_int($value) ? $this->team_document_count = $value : parent::assignMember($name, $value),
            'team_document_limit' => is_int($value) ? $this->team_document_limit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
