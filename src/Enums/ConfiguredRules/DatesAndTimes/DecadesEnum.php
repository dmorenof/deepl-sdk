<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum DecadesEnum: string
{
    case SpellOut = 'spell_out';
    case UseApostropheYy = 'use_apostrophe_yy';
    case UseYyFor20thCenturyButYyyyForOtherCenturies = 'use_yy_for_20th_century_but_yyyy_for_other_centuries';
    case UseYyWithoutApostrophe = 'use_yy_without_apostrophe';
    case UseYyyy = 'use_yyyy';
}
