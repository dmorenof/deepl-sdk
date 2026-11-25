<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation\RoundBrackets;

enum RoundBracketsEnum: string
{
    case UseFullWidthRoundBrackets = 'use_full_width_round_brackets';
    case UseHalfWidthRoundBrackets = 'use_half_width_round_brackets';
}
