<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum PreviousSentenceEnum: string
{
    case AddPeriodAfterClosingRoundBracket = 'add_period_after_closing_round_bracket';
    case AddPeriodBeforeClosingRoundBracket = 'add_period_before_closing_round_bracket';
}
