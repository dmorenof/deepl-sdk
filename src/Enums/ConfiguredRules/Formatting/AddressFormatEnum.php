<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Formatting;

enum AddressFormatEnum: string
{
    case PlaceDomainInParentheses = 'place_domain_in_parentheses';
    case ReplaceAtSymbolWithEnglishWordAtInBracketsAndReplacePeriodsWithEnglishWordDotInBrackets = 'replace_at_symbol_with_english_word_at_in_brackets_and_replace_periods_with_english_word_dot_in_brackets';
    case ReplaceAtSymbolWithEnglishWordAtInBracketsWithSpaceOnEitherSide = 'replace_at_symbol_with_english_word_at_in_brackets_with_space_on_either_side';
    case ReplaceAtSymbolWithEnglishWordAtInParenthesesWithSpaceOnEitherSide = 'replace_at_symbol_with_english_word_at_in_parentheses_with_space_on_either_side';
    case ReplaceAtSymbolWithEnglishWordAtWithSpaceOnEitherSide = 'replace_at_symbol_with_english_word_at_with_space_on_either_side';
    case UseStandardFormat = 'use_standard_format';
}
