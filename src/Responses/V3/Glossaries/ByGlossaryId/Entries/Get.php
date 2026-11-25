<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\Glossaries\ByGlossaryId\Entries;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The dictionaries of the glossary, each with its entries in the requested format.
     */
    public \DeepLSDK\Collections\V3\Glossaries\ByGlossaryId\Entries\Get\EntriesDictionariesCollection $dictionaries;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dictionaries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->dictionaries = new \DeepLSDK\Collections\V3\Glossaries\ByGlossaryId\Entries\Get\EntriesDictionariesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\MultilingualGlossary\Entries::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
