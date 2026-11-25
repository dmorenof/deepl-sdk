<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Create;

final class GlossaryParameters extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'entries',
        'entries_format',
        'name',
        'source_lang',
        'target_lang',
    ];

    /**
     * The entries of the glossary. The entries have to be specified in the format provided by the `entries_format` parameter.
     * Example: "Hello\tGuten Tag"
     */
    public string $entries;
    /**
     * The format in which the glossary entries are provided. Formats currently available:
     * - `tsv` (default) - tab-separated values
     * - `csv` - comma-separated values
     *
     * See [Supported Glossary Formats](/docs/customize/managing-glossaries#entry-formats) for details about each format.
     * Example: "tsv"
     */
    public \DeepLSDK\Enums\Create\GlossaryParameters\EntriesFormatEnum $entries_format;
    /**
     * Name to be associated with the glossary.
     * Example: "My Glossary"
     */
    public string $name;
    public \DeepLSDK\Enums\Glossary\SourceLanguage $source_lang;
    public \DeepLSDK\Enums\Glossary\TargetLanguage $target_lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entries' => is_string($value) ? $this->entries = $value : parent::assignMember($name, $value),
            'entries_format' => is_string($value) ? $this->entries_format = \DeepLSDK\Enums\Create\GlossaryParameters\EntriesFormatEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = \DeepLSDK\Enums\Glossary\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = \DeepLSDK\Enums\Glossary\TargetLanguage::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
