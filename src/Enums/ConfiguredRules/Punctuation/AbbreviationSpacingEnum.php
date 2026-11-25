<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AbbreviationSpacingEnum: string
{
    case DoNotUseSpacesBeforeAndAfterAmpersandAsPartOfAbbreviation = 'do_not_use_spaces_before_and_after_ampersand_as_part_of_abbreviation';
    case UseSpacesBeforeAndAfterAmpersandAsPartOfAbbreviation = 'use_spaces_before_and_after_ampersand_as_part_of_abbreviation';
}
