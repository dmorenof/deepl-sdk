<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class PatchMultilingualGlossaryParameters extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Dictionaries to edit the glossary with. Currently only supports 0 or 1 dictionaries in the array.
     */
    public \DeepLSDK\Collections\Create\MultilingualGlossaryParameters\DictionariesCollection $dictionaries;
    /**
     * A unique ID assigned to a glossary.
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
