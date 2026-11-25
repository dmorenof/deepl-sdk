<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum ApostropheEnum: string
{
    case UseCurlyApostrophes = 'use_curly_apostrophes';
    case UseStraightApostrophes = 'use_straight_apostrophes';
}
