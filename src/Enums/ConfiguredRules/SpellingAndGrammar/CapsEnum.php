<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum CapsEnum: string
{
    case DoNotUseAllCapsExceptForAcronymsInitialismsOrProperNouns = 'do_not_use_all_caps_except_for_acronyms_initialisms_or_proper_nouns';
    case DoNotUseAllCapsExceptForAcronymsOrBrandNames = 'do_not_use_all_caps_except_for_acronyms_or_brand_names';
}
