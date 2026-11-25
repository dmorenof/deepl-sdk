<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class SpokenTermsList extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of terms in this list.
     * Example: 3
     */
    public int $entry_count;
    /**
     * Language code (ISO 639-1).
     * Example: "en"
     */
    public string $lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entry_count' => is_int($value) ? $this->entry_count = $value : parent::assignMember($name, $value),
            'lang' => is_string($value) ? $this->lang = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
