<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum EllipsisEnum: string
{
    case UseEllipsisCharacter = 'use_ellipsis_character';
    case UseOneEllipsisCharacter = 'use_one_ellipsis_character';
    case UseSixDotsAtTheBottom = 'use_six_dots_at_the_bottom';
    case UseSixDotsInTheCenter = 'use_six_dots_in_the_center';
    case UseThreeDotsAtTheBottom = 'use_three_dots_at_the_bottom';
    case UseThreeDotsInTheCenter = 'use_three_dots_in_the_center';
    case UseThreeEllipsisCharacters = 'use_three_ellipsis_characters';
    case UseThreePeriods = 'use_three_periods';
    case UseThreePeriodsWithoutSpaces = 'use_three_periods_without_spaces';
    case UseThreeSpacedPeriods = 'use_three_spaced_periods';
    case UseTwoEllipsisCharacters = 'use_two_ellipsis_characters';
}
