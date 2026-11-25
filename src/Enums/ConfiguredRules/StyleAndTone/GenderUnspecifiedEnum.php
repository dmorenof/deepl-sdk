<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum GenderUnspecifiedEnum: string
{
    case UseBothMasculineAndFeminineForms = 'use_both_masculine_and_feminine_forms';
    case UseGenderNeutralTerms = 'use_gender_neutral_terms';
    case UseMasculineFormOnly = 'use_masculine_form_only';
    case UseMiddleDots = 'use_middle_dots';
    case UseParentheses = 'use_parentheses';
    case UsePeriods = 'use_periods';
}
