<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum DoubleNegativesEnum: string
{
    case DoNotUseDoubleNegatives = 'do_not_use_double_negatives';
    case UseDoubleNegatives = 'use_double_negatives';
}
