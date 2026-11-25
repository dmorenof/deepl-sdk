<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Glossary;

/**
 * A dictionary contained in a multilingual glossary. Each dictionary contains the mapping of source terms to target language terms.
 */
final class Dictionary extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'entry_count',
    ];

    /**
     * The entries of the glossary. The entries have to be specified in the format provided by the `entries_format` parameter.
     */
    public string $entries;
    public \DeepLSDK\Enums\Glossary\EntriesFormat $entries_format;
    /**
     * The number of entries in the glossary.
     */
    public int $entry_count;
    public \DeepLSDK\Enums\Glossary\SourceLanguage $source_lang;
    public \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage $target_lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entries' => is_string($value) ? $this->entries = $value : parent::assignMember($name, $value),
            'entries_format' => is_string($value) ? $this->entries_format = \DeepLSDK\Enums\Glossary\EntriesFormat::from($value) : parent::assignMember($name, $value),
            'entry_count' => is_int($value) ? $this->entry_count = $value : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = \DeepLSDK\Enums\Glossary\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
