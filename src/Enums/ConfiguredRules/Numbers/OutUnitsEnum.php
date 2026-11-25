<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum OutUnitsEnum: string
{
    case AbbreviateUnitsOfMeasureWhenUsedWithNumeralButSpellOutWhenUsedWithoutNumeral = 'abbreviate_units_of_measure_when_used_with_numeral_but_spell_out_when_used_without_numeral';
    case AlwaysAbbreviateUnitsOfMeasure = 'always_abbreviate_units_of_measure';
    case AlwaysSpellOutUnitsOfMeasure = 'always_spell_out_units_of_measure';
    case SpellOutUnitsInKorean = 'spell_out_units_in_korean';
    case SpellOutUnitsOfMeasureWhenUsedWithSpelledOutNumbersButAbbreviateWhenUsedWithNumeral = 'spell_out_units_of_measure_when_used_with_spelled_out_numbers_but_abbreviate_when_used_with_numeral';
    case SpellOutUnitsOfMeasureWithKatakanaOrKatakanaAndKanji = 'spell_out_units_of_measure_with_katakana_or_katakana_and_kanji';
    case UseSiSymbols = 'use_si_symbols';
    case UseUnitSymbols = 'use_unit_symbols';
}
