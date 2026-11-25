<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum YearsEnum: string
{
    case UseApostropheYy = 'use_apostrophe_yy';
    case UseCommonEra = 'use_common_era';
    case UseJapaneseImperialEra = 'use_japanese_imperial_era';
    case UseYyyy = 'use_yyyy';
}
