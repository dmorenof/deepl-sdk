<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum NumberFormatEnum: string
{
    case AlwaysUseArabicNumerals = 'always_use_arabic_numerals';
    case SpellOutLargeNumbers = 'spell_out_large_numbers';
    case UseAbbreviationsForLargeNumbers = 'use_abbreviations_for_large_numbers';
    case UseChineseCharactersForTenThousandsAndHundredMillions = 'use_chinese_characters_for_ten_thousands_and_hundred_millions';
    case UseCommaToSeparateLargeNumbersIntoUnitsOfThreeExceptForCalendarYears = 'use_comma_to_separate_large_numbers_into_units_of_three_except_for_calendar_years';
    case UseKanjiForTrillionsHundredMillionsAndTenThousands = 'use_kanji_for_trillions_hundred_millions_and_ten_thousands';
    case UseKoreanWordsManEogJoWithSpace = 'use_korean_words_만_억_조_with_space';
    case UseKoreanWordsManEogJoWithoutSpace = 'use_korean_words_만_억_조_without_space';
}
