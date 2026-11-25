<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum PercentageFormatEnum: string
{
    case UseArabicNumeralsFollowedByPercentSymbolWithoutSpace = 'use_arabic_numerals_followed_by_percent_symbol_without_space';
    case UseChineseNumbersFollowedByChineseWordBaiFenZhi = 'use_chinese_numbers_followed_by_chinese_word_百分之';
    case UseNumeralsFollowedByFullWidthPercentSymbolWithoutSpace = 'use_numerals_followed_by_full_width_percent_symbol_without_space';
    case UseNumeralsFollowedByJapaneseWordPasentoWithoutSpace = 'use_numerals_followed_by_japanese_word_パーセント_without_space';
    case UseNumeralsFollowedByKoreanWordPeosenteu = 'use_numerals_followed_by_korean_word_퍼센트';
    case UseNumeralsFollowedByPercentSymbol = 'use_numerals_followed_by_percent_symbol';
    case UseNumeralsFollowedBySpaceThenGermanWordProzent = 'use_numerals_followed_by_space_then_german_word_prozent';
    case UseNumeralsFollowedBySpaceThenHalfWidthPercentSymbol = 'use_numerals_followed_by_space_then_half_width_percent_symbol';
    case UseNumeralsFollowedBySpaceThenItalianWordPerCento = 'use_numerals_followed_by_space_then_italian_word_per_cento';
    case UseNumeralsFollowedBySpaceThenItalianWordPercento2 = 'use_numerals_followed_by_space_then_italian_word_percento';
    case UseNumeralsFollowedBySpaceThenKoreanWordPeosenteu = 'use_numerals_followed_by_space_then_korean_word_퍼센트';
    case UseNumeralsFollowedBySpaceThenPercentSymbol = 'use_numerals_followed_by_space_then_percent_symbol';
    case UseNumeralsFollowedBySpaceThenSpellOutPerCent = 'use_numerals_followed_by_space_then_spell_out_per_cent';
    case UseNumeralsFollowedBySpaceThenSpellOutPercent2 = 'use_numerals_followed_by_space_then_spell_out_percent';
    case UseSpanishWordPorCien = 'use_spanish_word_por_cien';
    case UseSpanishWordPorCiento = 'use_spanish_word_por_ciento';
}
