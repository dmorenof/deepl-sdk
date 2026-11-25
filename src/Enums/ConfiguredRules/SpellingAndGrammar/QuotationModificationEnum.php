<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum QuotationModificationEnum: string
{
    case DoNotModifyTextInQuotationMarks = 'do_not_modify_text_in_quotation_marks';
    case ModifyTextInQuotationMarksAccordingToCustomRules = 'modify_text_in_quotation_marks_according_to_custom_rules';
}
