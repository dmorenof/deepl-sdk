<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * Example: {"glossary_id":"def3a26b-3e84-45b3-84ae-0c0aaf3525f7","name":"My Glossary","dictionaries":[{"source_lang":"en","target_lang":"de","entry_count":1}],"creation_time":"2021-08-03T14:16:18.329Z"}
 */
final class MultilingualGlossary extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The creation time of the glossary in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Format: date-time
     */
    public string $creation_time;
    /**
     * List of dictionaries contained in this glossary.
     * Each dictionary contains a source and target language, as well as pairs of source and target entries.
     */
    public \DeepLSDK\Collections\Create\MultilingualGlossaryParameters\DictionariesCollection $dictionaries;
    /**
     * A unique ID assigned to a glossary.
     */
    public string $glossary_id;
    /**
     * Name associated with the glossary.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'dictionaries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->dictionaries = new \DeepLSDK\Collections\Create\MultilingualGlossaryParameters\DictionariesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Glossary\Dictionary::class)) : parent::assignMember($name, $value),
            'glossary_id' => is_string($value) ? $this->glossary_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
