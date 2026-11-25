<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DefaultSecondPersonPronoun;

enum PersonPronounEnum: string
{
    case DoNotUseSecondPersonPronouns = 'do_not_use_second_person_pronouns';
    case UseSecondPersonPronouns = 'use_second_person_pronouns';
}
