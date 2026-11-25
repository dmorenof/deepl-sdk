<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum WordSoloEnum: string
{
    case NeverUseAcuteAccent = 'never_use_acute_accent';
    case UseAcuteAccentWhenUsedAsAdverb = 'use_acute_accent_when_used_as_adverb';
}
