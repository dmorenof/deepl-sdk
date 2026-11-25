<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum WithEnglishEnum: string
{
    case DoNotPlaceEnglishInQuotationMarks = 'do_not_place_english_in_quotation_marks';
    case PlaceEnglishInQuotationMarks = 'place_english_in_quotation_marks';
}
