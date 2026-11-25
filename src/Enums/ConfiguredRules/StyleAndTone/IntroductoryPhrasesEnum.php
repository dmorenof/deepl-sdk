<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum IntroductoryPhrasesEnum: string
{
    case AvoidRedundantIntroductoryPhrases = 'avoid_redundant_introductory_phrases';
    case DoNotUseRedundantPhrasesThatReferToCurrentText = 'do_not_use_redundant_phrases_that_refer_to_current_text';
}
