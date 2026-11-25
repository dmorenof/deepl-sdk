<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum QuotedPhrasesEnum: string
{
    case UseFullWidthQuotationMarks = 'use_full_width_quotation_marks';
    case UseHalfWidthQuotationMarks = 'use_half_width_quotation_marks';
}
