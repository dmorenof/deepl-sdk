<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation\CornerBracketsAndPeriods;

enum AndPeriodsEnum: string
{
    case DoNotAddPeriodBeforeClosingCornerBracketWhenSentenceContinues = 'do_not_add_period_before_closing_corner_bracket_when_sentence_continues';
}
