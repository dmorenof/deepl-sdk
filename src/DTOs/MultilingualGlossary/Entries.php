<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\MultilingualGlossary;

final class Entries extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The entries of the glossary. The entries have to be specified in the format provided by the `entries_format` parameter.
     */
    public string $entries;
    public \DeepLSDK\Enums\Glossary\EntriesFormat $entries_format;
    public \DeepLSDK\Enums\Glossary\SourceLanguage $source_lang;
    public \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage $target_lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entries' => is_string($value) ? $this->entries = $value : parent::assignMember($name, $value),
            'entries_format' => is_string($value) ? $this->entries_format = \DeepLSDK\Enums\Glossary\EntriesFormat::from($value) : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = \DeepLSDK\Enums\Glossary\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
