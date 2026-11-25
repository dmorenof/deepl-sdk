<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\GlossaryLanguagePairs\Get;

final class SupportedLanguagesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source_lang',
        'target_lang',
    ];

    /**
     * The language in which the source texts in the glossary are specified.
     * Example: "en"
     */
    public string $source_lang;
    /**
     * The language in which the target texts in the glossary are specified.
     * Example: "de"
     */
    public string $target_lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'source_lang' => is_string($value) ? $this->source_lang = $value : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
