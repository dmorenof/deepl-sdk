<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum DashEnum: string
{
    case UseEmDash = 'use_em_dash';
    case UseHyphen = 'use_hyphen';
    case UseTilde = 'use_tilde';
}
