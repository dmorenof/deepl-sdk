<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AmpersandUsageEnum: string
{
    case UseEnglishWordAndExceptInCompanyNamesCommonAbbreviationsTitlesSoftwareCodeAndMathematicalEquations = 'use_english_word_and_except_in_company_names_common_abbreviations_titles_software_code_and_mathematical_equations';
    case UseFullWidthAmpersand = 'use_full_width_ampersand';
    case UseGermanWordUndExceptInCompanyNamesCommonAbbreviationsTitlesSoftwareCodeAndMathematicalEquations = 'use_german_word_und_except_in_company_names_common_abbreviations_titles_software_code_and_mathematical_equations';
    case UseHalfWidthAmpersand = 'use_half_width_ampersand';
}
