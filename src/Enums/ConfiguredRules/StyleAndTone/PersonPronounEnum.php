<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum PersonPronounEnum: string
{
    case DoNotUseFirstPersonPronouns = 'do_not_use_first_person_pronouns';
    case OmitFirstPersonSubjectWhenClearFromContext = 'omit_first_person_subject_when_clear_from_context';
    case UseFirstPersonPronouns = 'use_first_person_pronouns';
}
