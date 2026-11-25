<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum ContractionsEnum: string
{
    case DoNotUseContractions = 'do_not_use_contractions';
    case UseContractions = 'use_contractions';
    case UseContractionsButAvoidNegativeContractions = 'use_contractions_but_avoid_negative_contractions';
}
