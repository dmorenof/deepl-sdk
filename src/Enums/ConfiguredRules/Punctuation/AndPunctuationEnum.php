<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AndPunctuationEnum: string
{
    case DoNotUseSpace = 'do_not_use_space';
    case UseRegularSpace = 'use_regular_space';
}
