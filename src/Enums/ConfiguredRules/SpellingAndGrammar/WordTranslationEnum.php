<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum WordTranslationEnum: string
{
    case UseEquivalentExpressionsInChinese = 'use_equivalent_expressions_in_chinese';
    case UseForeignFormsOrAbbreviationsForTechnicalTermsOrBrandNames = 'use_foreign_forms_or_abbreviations_for_technical_terms_or_brand_names';
    case UseLiteralTranslation = 'use_literal_translation';
    case UseLocalizedNamesForBrandsWithOfficialChineseTranslations = 'use_localized_names_for_brands_with_official_chinese_translations';
    case UseMixtureOfTransliterationAndTranslation = 'use_mixture_of_transliteration_and_translation';
    case UseTransliteration = 'use_transliteration';
}
