<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum SerialCommaEnum: string
{
    case DoNotUse = 'do_not_use';
    case DoNotUseSerialCommaWhenUsingChineseComma = 'do_not_use_serial_comma_when_using_chinese_comma';
    case Use_ = 'use';
    case UseSerialCommaWhenUsingComma = 'use_serial_comma_when_using_comma';
}
