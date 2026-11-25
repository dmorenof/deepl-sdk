<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum MoneyFormatEnum: string
{
    case UseAmountFollowedByAbbreviationForMillionOrBillionWithoutSpace = 'use_amount_followed_by_abbreviation_for_million_or_billion_without_space';
    case UseAmountFollowedBySpaceThenAbbreviationForMillionOrBillion = 'use_amount_followed_by_space_then_abbreviation_for_million_or_billion';
    case UseAmountFollowedBySpaceThenEnglishWordMillionOrBillion = 'use_amount_followed_by_space_then_english_word_million_or_billion';
}
