<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum ThousandsSeparatorEnum: string
{
    case DoNotUse = 'do_not_use';
    case DoNotUseThousandsSeparator = 'do_not_use_thousands_separator';
    case UseComma = 'use_comma';
    case UseCommaToSeparateLargeNumbersIntoUnitsOfThree = 'use_comma_to_separate_large_numbers_into_units_of_three';
    case UsePeriod = 'use_period';
    case UsePeriodAsThousandsSeparator = 'use_period_as_thousands_separator';
    case UseSpace = 'use_space';
    case UseSpaceAsThousandsSeparator = 'use_space_as_thousands_separator';
    case UseSpaceToSeparateLargeNumbersIntoUnitsOfThree = 'use_space_to_separate_large_numbers_into_units_of_three';
    case UseStraightApostropheAsThousandsSeparator = 'use_straight_apostrophe_as_thousands_separator';
}
