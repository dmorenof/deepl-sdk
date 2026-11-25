<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum MinutesSeparatorEnum: string
{
    case UseColonWithoutSpaces = 'use_colon_without_spaces';
    case UseLetterHWithRegularSpaceOnEitherSide = 'use_letter_h_with_regular_space_on_either_side';
    case UseLetterHWithoutSpaces = 'use_letter_h_without_spaces';
}
