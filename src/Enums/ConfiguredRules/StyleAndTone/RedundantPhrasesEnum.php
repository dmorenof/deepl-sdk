<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum RedundantPhrasesEnum: string
{
    case AvoidRelativizingAndRedundantPhrases = 'avoid_relativizing_and_redundant_phrases';
    case DoNotUseRedundantPhrases = 'do_not_use_redundant_phrases';
}
