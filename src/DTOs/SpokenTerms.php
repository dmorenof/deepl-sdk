<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class SpokenTerms extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The creation time of the Spoken Terms collection in ISO 8601-1:2019 format (e.g.: `2025-08-03T14:16:18.329Z`).
     * Example: "2025-08-03T14:16:18.329Z"
     * Format: date-time
     */
    public string $creation_time;
    /**
     * Name of the Spoken Terms collection.
     * Example: "Technical Terms"
     */
    public string $name;
    /**
     * A unique ID assigned to the Spoken Terms collection.
     * Example: "def3a26b-3e84-45b3-84ae-0c0aaf3525f7"
     */
    public string $spoken_terms_id;
    /**
     * List of term lists contained in this collection.
     */
    public \DeepLSDK\Collections\SpokenTerms\TermListsCollection $term_lists;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'spoken_terms_id' => is_string($value) ? $this->spoken_terms_id = $value : parent::assignMember($name, $value),
            'term_lists' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->term_lists = new \DeepLSDK\Collections\SpokenTerms\TermListsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\SpokenTermsList::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
