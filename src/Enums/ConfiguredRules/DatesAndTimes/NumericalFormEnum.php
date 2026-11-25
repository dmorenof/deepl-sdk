<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum NumericalFormEnum: string
{
    case UseDdHyphenMmHyphenYyyy = 'use_dd_hyphen_mm_hyphen_yyyy';
    case UseDdPeriodMmPeriodYyyy = 'use_dd_period_mm_period_yyyy';
    case UseDdSlashMmSlashYyyy = 'use_dd_slash_mm_slash_yyyy';
}
