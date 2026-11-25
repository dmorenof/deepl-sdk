<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AndApostropheEnum: string
{
    case UseCurlyQuotationMarksAndApostrophes = 'use_curly_quotation_marks_and_apostrophes';
    case UseDoubleAndSingleCurlyQuotationMarksAndCurlyApostrophes = 'use_double_and_single_curly_quotation_marks_and_curly_apostrophes';
    case UseDoubleAndSingleStraightQuotationMarksAndStraightApostrophes = 'use_double_and_single_straight_quotation_marks_and_straight_apostrophes';
    case UseGuillemetsAndCurlyApostrophes = 'use_guillemets_and_curly_apostrophes';
    case UseGuillemetsAndStraightApostrophes = 'use_guillemets_and_straight_apostrophes';
    case UseStraightQuotationMarksAndApostrophes = 'use_straight_quotation_marks_and_apostrophes';
}
