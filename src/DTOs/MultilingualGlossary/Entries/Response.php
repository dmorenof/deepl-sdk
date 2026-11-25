<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\MultilingualGlossary\Entries;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\Collections\MultilingualGlossary\Entries\Response\DictionariesCollection $dictionaries;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dictionaries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->dictionaries = new \DeepLSDK\Collections\MultilingualGlossary\Entries\Response\DictionariesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\MultilingualGlossary\EntriesInformation::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
