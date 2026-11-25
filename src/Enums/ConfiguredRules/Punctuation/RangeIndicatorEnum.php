<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum RangeIndicatorEnum: string
{
    case UseEnDashWithSpaces = 'use_en_dash_with_spaces';
    case UseEnDashWithoutSpaceOnEitherSide = 'use_en_dash_without_space_on_either_side';
    case UseEnDashWithoutSpaces = 'use_en_dash_without_spaces';
    case UseEnglishWordTo = 'use_english_word_to';
    case UseFullWidthDash = 'use_full_width_dash';
    case UseFullWidthWaveDash = 'use_full_width_wave_dash';
    case UseGermanWordBis = 'use_german_word_bis';
    case UseHalfWidthDash = 'use_half_width_dash';
    case UseHyphen = 'use_hyphen';
    case UseHyphenWithSpaceOnEitherSide = 'use_hyphen_with_space_on_either_side';
    case UseHyphenWithSpaces = 'use_hyphen_with_spaces';
    case UseHyphenWithoutSpaceOnEitherSide = 'use_hyphen_without_space_on_either_side';
    case UseHyphenWithoutSpaces = 'use_hyphen_without_spaces';
    case UseItalianWordsDaA = 'use_italian_words_da_a';
    case UseJapaneseWordKara = 'use_japanese_word_から';
    case UseKoreanWordsButeoKkaji = 'use_korean_words_부터_까지';
    case UseSpanishWordsDeA = 'use_spanish_words_de_a';
    case UseTilde = 'use_tilde';
}
