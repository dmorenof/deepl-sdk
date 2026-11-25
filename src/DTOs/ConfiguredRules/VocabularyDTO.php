<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class VocabularyDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Formatting options for Abbreviations
     */
    public \DeepLSDK\Enums\ConfiguredRules\Vocabulary\AbbreviationsEnum $abbreviations;
    /**
     * Formatting options for Loanwords
     */
    public \DeepLSDK\Enums\ConfiguredRules\Vocabulary\LoanwordsEnum $loanwords;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'abbreviations' => is_string($value) ? $this->abbreviations = \DeepLSDK\Enums\ConfiguredRules\Vocabulary\AbbreviationsEnum::from($value) : parent::assignMember($name, $value),
            'loanwords' => is_string($value) ? $this->loanwords = \DeepLSDK\Enums\ConfiguredRules\Vocabulary\LoanwordsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
