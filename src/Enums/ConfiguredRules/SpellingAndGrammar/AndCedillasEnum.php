<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum AndCedillasEnum: string
{
    case DoNotUseOnCapitalLetters = 'do_not_use_on_capital_letters';
    case NeverUse = 'never_use';
    case UseEvenOnCapitalLetters = 'use_even_on_capital_letters';
}
