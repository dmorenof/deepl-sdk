<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum InNumeralsEnum: string
{
    case Use0000 = 'use_00_00';
    case Use2400 = 'use_24_00';
}
