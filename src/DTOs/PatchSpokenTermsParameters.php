<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class PatchSpokenTermsParameters extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'name' => [
        'maxLength' => 1024,
    ],
];

    /**
     * New name for the Spoken Terms collection.
     * Example: "Updated Technical Terms"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Term lists to merge with existing lists.
     */
    public \DeepLSDK\Collections\Create\SpokenTermsParameters\TermListsCollection $term_lists;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'term_lists' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->term_lists = new \DeepLSDK\Collections\Create\SpokenTermsParameters\TermListsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\SpokenTerms\ListInput::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
