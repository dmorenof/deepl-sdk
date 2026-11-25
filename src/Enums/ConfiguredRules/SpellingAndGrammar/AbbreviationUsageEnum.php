<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum AbbreviationUsageEnum: string
{
    case DoNotUseAbbreviations = 'do_not_use_abbreviations';
    case DoNotUseAbbreviationsUnlessNecessary = 'do_not_use_abbreviations_unless_necessary';
    case UseAbbreviations = 'use_abbreviations';
    case UseAbbreviationsAsNeeded = 'use_abbreviations_as_needed';
}
