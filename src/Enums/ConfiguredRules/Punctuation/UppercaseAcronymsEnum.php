<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum UppercaseAcronymsEnum: string
{
    case DoNotUseSpaces = 'do_not_use_spaces';
    case UseSpaces = 'use_spaces';
}
