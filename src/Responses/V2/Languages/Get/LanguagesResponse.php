<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Languages\Get;

final class LanguagesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'language',
        'name',
    ];

    /**
     * The language code of the given language.
     * Example: "DE"
     */
    public string $language;
    /**
     * Name of the language in English.
     * Example: "German"
     */
    public string $name;
    /**
     * Denotes formality support in case of a target language listing.
     * Example: true
     */
    public bool $supports_formality;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'supports_formality' => is_bool($value) ? $this->supports_formality = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
