<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum NumberSeparatorEnum: string
{
    case DoNotUseChineseCommaToSeparateNumbersIndicatingApproximateValue = 'do_not_use_chinese_comma_to_separate_numbers_indicating_approximate_value';
    case UseChineseCommaToSeparateNumbersInAbbreviations = 'use_chinese_comma_to_separate_numbers_in_abbreviations';
}
