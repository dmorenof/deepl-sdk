<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\MultilingualGlossary;

final class EntriesInformation extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The number of entries in the glossary.
     */
    public int $entry_count;
    public \DeepLSDK\Enums\Glossary\SourceLanguage $source_lang;
    public \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage $target_lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entry_count' => is_int($value) ? $this->entry_count = $value : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = \DeepLSDK\Enums\Glossary\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
