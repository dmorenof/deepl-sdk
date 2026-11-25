<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum BracketEnum: string
{
    case UseHexagonalBrackets = 'use_hexagonal_brackets';
    case UseLenticularBrackets = 'use_lenticular_brackets';
    case UseParentheses = 'use_parentheses';
    case UseSquareBracketsForNationalityAndHexagonalBracketsForHistoricalPeriod = 'use_square_brackets_for_nationality_and_hexagonal_brackets_for_historical_period';
}
