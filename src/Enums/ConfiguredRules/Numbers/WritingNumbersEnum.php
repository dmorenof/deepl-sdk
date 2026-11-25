<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum WritingNumbersEnum: string
{
    case AlwaysUseKanjiNumbers = 'always_use_kanji_numbers';
    case UseArabicNumerals = 'use_arabic_numerals';
    case UseFullWidthArabicNumeralsAndOnlyUseKanjiNumbersWhereItWouldOtherwiseSoundUnnatural = 'use_full_width_arabic_numerals_and_only_use_kanji_numbers_where_it_would_otherwise_sound_unnatural';
    case UseHalfWidthArabicNumeralsAndOnlyUseKanjiNumbersWhereItWouldOtherwiseSoundUnnatural = 'use_half_width_arabic_numerals_and_only_use_kanji_numbers_where_it_would_otherwise_sound_unnatural';
}
