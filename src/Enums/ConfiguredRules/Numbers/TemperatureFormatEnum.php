<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum TemperatureFormatEnum: string
{
    case SpellOutUnit = 'spell_out_unit';
    case SpellOutUnitFollowedByNumeralsThenKoreanWordDo = 'spell_out_unit_followed_by_numerals_then_korean_word_도';
    case UseArabicNumeralsFollowedBySpaceThenSpellOutUnit = 'use_arabic_numerals_followed_by_space_then_spell_out_unit';
    case UseArabicNumeralsFollowedByUnitSymbolWithoutSpace = 'use_arabic_numerals_followed_by_unit_symbol_without_space';
    case UseArabicNumeralsThenSpellOutUnit = 'use_arabic_numerals_then_spell_out_unit';
    case UseChineseNumbersThenSpellOutUnit = 'use_chinese_numbers_then_spell_out_unit';
    case UseItalianWordGradoAndDoNotSpecifyTemperatureScale = 'use_italian_word_grado_and_do_not_specify_temperature_scale';
    case UseNumeralsFollowedByJapaneseWordDuWithoutSpace = 'use_numerals_followed_by_japanese_word_度_without_space';
    case UseNumeralsFollowedByKoreanWordDo = 'use_numerals_followed_by_korean_word_도';
    case UseNumeralsFollowedBySpaceThenSpellOutUnit = 'use_numerals_followed_by_space_then_spell_out_unit';
    case UseNumeralsFollowedBySpaceThenUnitSymbol = 'use_numerals_followed_by_space_then_unit_symbol';
    case UseNumeralsFollowedByUnitSymbolWithoutSpace = 'use_numerals_followed_by_unit_symbol_without_space';
    case UseSpanishWordGradoAndDoNotSpecifyTemperatureScale = 'use_spanish_word_grado_and_do_not_specify_temperature_scale';
}
