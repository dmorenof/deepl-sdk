<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Create;

final class MultilingualGlossaryParameters extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'dictionaries',
    'name',
];

    /**
     * Dictionaries to populate the glossary with.
     */
    public \DeepLSDK\Collections\Create\MultilingualGlossaryParameters\DictionariesCollection $dictionaries;
    /**
     * Name to be associated with the glossary.
     * Example: "My Glossary"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dictionaries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->dictionaries = new \DeepLSDK\Collections\Create\MultilingualGlossaryParameters\DictionariesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Glossary\Dictionary::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
