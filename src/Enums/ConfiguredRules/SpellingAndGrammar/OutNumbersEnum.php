<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum OutNumbersEnum: string
{
    case UseHyphens = 'use_hyphens';
    case UseHyphensBetweenElementsUnder100AndNotSeparatedByFrenchWordEt = 'use_hyphens_between_elements_under_100_and_not_separated_by_french_word_et';
}
