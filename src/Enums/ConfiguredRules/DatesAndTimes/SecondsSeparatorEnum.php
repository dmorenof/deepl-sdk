<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum SecondsSeparatorEnum: string
{
    case UseColon = 'use_colon';
    case UsePeriod = 'use_period';
}
