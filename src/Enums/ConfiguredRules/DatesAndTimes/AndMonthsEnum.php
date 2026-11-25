<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum AndMonthsEnum: string
{
    case DoNotUseLeadingZero = 'do_not_use_leading_zero';
    case UseLeadingZero = 'use_leading_zero';
}
