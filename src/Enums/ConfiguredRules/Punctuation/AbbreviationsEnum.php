<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AbbreviationsEnum: string
{
    case DoNotSeparateAbbreviatedWords = 'do_not_separate_abbreviated_words';
    case SeparateEachAbbreviatedWordWithPeriodAndSpace = 'separate_each_abbreviated_word_with_period_and_space';
    case SeparateEachAbbreviatedWordWithPeriodWithoutSpace = 'separate_each_abbreviated_word_with_period_without_space';
    case SeparateEachAbbreviatedWordWithSpaceWithoutPeriod = 'separate_each_abbreviated_word_with_space_without_period';
}
