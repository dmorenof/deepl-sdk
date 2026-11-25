<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum CalendarEraEnum: string
{
    case UseBcAndAd = 'use_bc_and_ad';
    case UseBceAndCe = 'use_bce_and_ce';
}
