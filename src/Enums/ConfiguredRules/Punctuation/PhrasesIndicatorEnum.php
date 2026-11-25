<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum PhrasesIndicatorEnum: string
{
    case UseComma = 'use_comma';
    case UseHyphen = 'use_hyphen';
    case UseMiddleDot = 'use_middle_dot';
}
