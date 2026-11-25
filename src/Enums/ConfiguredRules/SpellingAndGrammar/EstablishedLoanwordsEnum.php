<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum EstablishedLoanwordsEnum: string
{
    case UseAsIs = 'use_as_is';
    case UseNativeOrSinoKoreanEquivalents = 'use_native_or_sino_korean_equivalents';
}
