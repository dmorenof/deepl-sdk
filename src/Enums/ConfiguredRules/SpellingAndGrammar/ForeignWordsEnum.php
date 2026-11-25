<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum ForeignWordsEnum: string
{
    case UseFrenchSpellingRules = 'use_french_spelling_rules';
    case UseOriginalLanguageSpelling = 'use_original_language_spelling';
}
