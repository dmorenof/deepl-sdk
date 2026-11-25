<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum CurrencyFormatEnum: string
{
    case SpellOut = 'spell_out';
    case SpellOutCurrencyNameFollowedByAmountInArabicNumeralsWithoutSpace = 'spell_out_currency_name_followed_by_amount_in_arabic_numerals_without_space';
    case SpellOutCurrencyNameFollowedByAmountInChinese = 'spell_out_currency_name_followed_by_amount_in_chinese';
    case UseAmountFollowedByCurrencySymbolWithoutSpace = 'use_amount_followed_by_currency_symbol_without_space';
    case UseAmountFollowedBySpaceThenCurrencySymbol = 'use_amount_followed_by_space_then_currency_symbol';
    case UseAmountFollowedBySpaceThenIsoCode = 'use_amount_followed_by_space_then_iso_code';
    case UseAmountFollowedBySpaceThenSpellOutCurrencyName = 'use_amount_followed_by_space_then_spell_out_currency_name';
    case UseAmountFollowedBySpaceThenSpellOutCurrencyNameInLowercase = 'use_amount_followed_by_space_then_spell_out_currency_name_in_lowercase';
    case UseAmountFollowedBySpelledOutCurrencyNameInJapaneseWithoutSpace = 'use_amount_followed_by_spelled_out_currency_name_in_japanese_without_space';
    case UseAmountFollowedBySpelledOutCurrencyNameWithoutSpace = 'use_amount_followed_by_spelled_out_currency_name_without_space';
    case UseCurrencySymbolButSpellOutIfNoSymbolExists = 'use_currency_symbol_but_spell_out_if_no_symbol_exists';
    case UseCurrencySymbolButUseIsoCodeIfNoSymbolExists = 'use_currency_symbol_but_use_iso_code_if_no_symbol_exists';
    case UseCurrencySymbolFollowedByAmountInArabicNumeralsWithoutSpace = 'use_currency_symbol_followed_by_amount_in_arabic_numerals_without_space';
    case UseCurrencySymbolFollowedByAmountWithoutSpace = 'use_currency_symbol_followed_by_amount_without_space';
    case UseCurrencySymbolFollowedBySpaceThenAmount = 'use_currency_symbol_followed_by_space_then_amount';
    case UseCurrencySymbolFollowedBySpaceThenAmountInArabicNumerals = 'use_currency_symbol_followed_by_space_then_amount_in_arabic_numerals';
    case UseFullWidthCurrencySymbolFollowedByAmountWithoutSpace = 'use_full_width_currency_symbol_followed_by_amount_without_space';
    case UseHalfWidthCurrencySymbolFollowedByAmountWithoutSpace = 'use_half_width_currency_symbol_followed_by_amount_without_space';
    case UseHalfWidthCurrencySymbolFollowedBySpaceThenAmount = 'use_half_width_currency_symbol_followed_by_space_then_amount';
    case UseIsoCode = 'use_iso_code';
    case UseIsoCodeFollowedBySpaceThenAmount = 'use_iso_code_followed_by_space_then_amount';
    case UseIsoCodeFollowedBySpaceThenAmountInArabicNumerals = 'use_iso_code_followed_by_space_then_amount_in_arabic_numerals';
}
