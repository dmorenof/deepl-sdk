<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum PersonalTitlesEnum: string
{
    case Abbreviate = 'abbreviate';
    case DoNotAbbreviate = 'do_not_abbreviate';
}
