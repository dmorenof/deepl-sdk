<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum ZeroFormatEnum: string
{
    case UseChineseWordLingForNumbering = 'use_chinese_word_〇_for_numbering';
    case UseChineseWordLingForMeasurement = 'use_chinese_word_零_for_measurement';
}
