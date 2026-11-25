<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum WritingDatesEnum: string
{
    case UseDdSpaceSpelledOutMonthSpaceYyyy = 'use_dd_space_spelled_out_month_space_yyyy';
    case UseNumerals = 'use_numerals';
}
