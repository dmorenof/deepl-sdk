<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * Example: {"glossary_id":"def3a26b-3e84-45b3-84ae-0c0aaf3525f7","ready":true,"name":"My Glossary","source_lang":"en","target_lang":"de","creation_time":"2021-08-03T14:16:18.329Z","entry_count":1}
 */
final class MonolingualGlossary extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The creation time of the glossary in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Format: date-time
     */
    public string $creation_time;
    /**
     * The number of entries in the glossary.
     */
    public int $entry_count;
    /**
     * A unique ID assigned to a glossary.
     */
    public string $glossary_id;
    /**
     * Name associated with the glossary.
     */
    public string $name;
    /**
     * Indicates if the newly created glossary can already be used in `translate` requests.
     * If the created glossary is not yet ready, you have to wait and check the `ready` status
     * of the glossary before using it in a `translate` request.
     */
    public bool $ready;
    public \DeepLSDK\Enums\Glossary\SourceLanguage $source_lang;
    public \DeepLSDK\Enums\Glossary\TargetLanguage $target_lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'entry_count' => is_int($value) ? $this->entry_count = $value : parent::assignMember($name, $value),
            'glossary_id' => is_string($value) ? $this->glossary_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'ready' => is_bool($value) ? $this->ready = $value : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = \DeepLSDK\Enums\Glossary\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = \DeepLSDK\Enums\Glossary\TargetLanguage::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
