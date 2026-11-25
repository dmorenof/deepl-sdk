<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\SpokenTerms;

final class Entries extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Newline-separated list of terms.
     * Example: "DeepL\nAPI\nwebhook"
     */
    public string $entries;
    /**
     * Language code (ISO 639-1).
     * Example: "en"
     */
    public string $lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entries' => is_string($value) ? $this->entries = $value : parent::assignMember($name, $value),
            'lang' => is_string($value) ? $this->lang = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
