<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum CircumflexAccentsEnum: string
{
    case DoNotUseCircumflexAccentsExceptInVerbsAndToDistinguishHomophones = 'do_not_use_circumflex_accents_except_in_verbs_and_to_distinguish_homophones';
    case UseCircumflexAccents = 'use_circumflex_accents';
}
