<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum DirectQuotesEnum: string
{
    case DoNotUse = 'do_not_use';
    case Use_ = 'use';
}
