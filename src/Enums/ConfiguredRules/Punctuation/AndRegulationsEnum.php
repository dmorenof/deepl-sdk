<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AndRegulationsEnum: string
{
    case UseSingleAngleBrackets = 'use_single_angle_brackets';
    case UseSingleCornerBrackets = 'use_single_corner_brackets';
    case UseSingleStraightQuotationMarks = 'use_single_straight_quotation_marks';
}
