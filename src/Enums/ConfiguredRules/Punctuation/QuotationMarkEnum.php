<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum QuotationMarkEnum: string
{
    case UseCurlyQuotationMarks = 'use_curly_quotation_marks';
    case UseDoubleCurlyQuotationMarks = 'use_double_curly_quotation_marks';
    case UseDoubleStraightQuotationMarks = 'use_double_straight_quotation_marks';
    case UseGuillemets = 'use_guillemets';
    case UseStraightQuotationMarks = 'use_straight_quotation_marks';
}
