<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AndCommasEnum: string
{
    case UseFullWidthJapanesePeriodsAndFullWidthJapaneseCommas = 'use_full_width_japanese_periods_and_full_width_japanese_commas';
    case UseFullWidthJapanesePeriodsAndFullWidthNonJapaneseCommas = 'use_full_width_japanese_periods_and_full_width_non_japanese_commas';
    case UseFullWidthNonJapanesePeriodsAndFullWidthJapaneseCommas = 'use_full_width_non_japanese_periods_and_full_width_japanese_commas';
    case UseFullWidthNonJapanesePeriodsAndFullWidthNonJapaneseCommas = 'use_full_width_non_japanese_periods_and_full_width_non_japanese_commas';
}
