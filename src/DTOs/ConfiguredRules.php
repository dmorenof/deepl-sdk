<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * The enabled rules for the style rule list including what option was selected for each rule. This schema combines rules from all supported languages.
 * Example: {"style_and_tone":{"abbreviations":"use_abbreviations_and_symbols","short_vs_long_words":"use_short_words"},"punctuation":{"apostrophe":"use_curly_apostrophes"}}
 */
final class ConfiguredRules extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\DTOs\ConfiguredRules\AndTimesDTO $dates_and_times;
    public \DeepLSDK\DTOs\ConfiguredRules\FormattingDTO $formatting;
    public \DeepLSDK\DTOs\ConfiguredRules\NumbersDTO $numbers;
    public \DeepLSDK\DTOs\ConfiguredRules\PunctuationDTO $punctuation;
    public \DeepLSDK\DTOs\ConfiguredRules\AndGrammarDTO $spelling_and_grammar;
    public \DeepLSDK\DTOs\ConfiguredRules\AndToneDTO $style_and_tone;
    public \DeepLSDK\DTOs\ConfiguredRules\VocabularyDTO $vocabulary;

}
