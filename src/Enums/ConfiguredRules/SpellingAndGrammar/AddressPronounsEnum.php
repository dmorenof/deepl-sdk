<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum AddressPronounsEnum: string
{
    case CapitalizeInformalAddressPronouns = 'capitalize_informal_address_pronouns';
    case DoNotCapitalizeInformalAddressPronouns = 'do_not_capitalize_informal_address_pronouns';
}
