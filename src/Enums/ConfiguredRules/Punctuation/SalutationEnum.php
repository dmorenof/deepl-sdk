<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum SalutationEnum: string
{
    case DoNotUseCommaAfterSalutationCapitalizeFollowingWord = 'do_not_use_comma_after_salutation_capitalize_following_word';
    case UseColonAfterSalutation = 'use_colon_after_salutation';
    case UseCommaAfterSalutation = 'use_comma_after_salutation';
    case UseExclamationMarkAfterSalutation = 'use_exclamation_mark_after_salutation';
}
