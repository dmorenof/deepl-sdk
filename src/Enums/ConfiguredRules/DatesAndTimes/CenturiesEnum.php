<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\DatesAndTimes;

enum CenturiesEnum: string
{
    case SpellOut = 'spell_out';
    case UseArabicNumerals = 'use_arabic_numerals';
    case UseNumerals = 'use_numerals';
    case UseRomanNumerals = 'use_roman_numerals';
}
