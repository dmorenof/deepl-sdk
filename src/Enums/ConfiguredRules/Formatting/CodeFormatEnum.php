<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Formatting;

enum CodeFormatEnum: string
{
    case Use00BeforeCountryCode = 'use_00_before_country_code';
    case UsePlusSignBeforeCountryCode = 'use_plus_sign_before_country_code';
}
