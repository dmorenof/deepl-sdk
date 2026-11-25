<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\TranslationMemories;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The total number of translation memories available.
     * Example: 2
     */
    public int $total_count;
    public \DeepLSDK\Collections\V3\TranslationMemories\Get\TranslationMemoriesCollection $translation_memories;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total_count' => is_int($value) ? $this->total_count = $value : parent::assignMember($name, $value),
            'translation_memories' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->translation_memories = new \DeepLSDK\Collections\V3\TranslationMemories\Get\TranslationMemoriesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\TranslationMemory::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
