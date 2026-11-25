<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Formatting;

enum NumberFormatEnum: string
{
    case DoNotUseSpaces = 'do_not_use_spaces';
    case DoNotUseSpacesOrSpecialCharactersBetweenDigitsOfPhoneNumber = 'do_not_use_spaces_or_special_characters_between_digits_of_phone_number';
    case KeepOriginalFormat = 'keep_original_format';
    case PlaceAreaCodeInParenthesesFollowedBySpace = 'place_area_code_in_parentheses_followed_by_space';
    case SeparateAreaCodeAndPhoneNumberWithSlash = 'separate_area_code_and_phone_number_with_slash';
    case SeparateAreaCodeAndPhoneNumberWithSpace = 'separate_area_code_and_phone_number_with_space';
    case SeparateCountryCodeAreaCodeLocalPrefixAndLastFourDigitsWithHyphens = 'separate_country_code_area_code_local_prefix_and_last_four_digits_with_hyphens';
    case SeparateCountryCodeAreaCodeLocalPrefixAndLastFourDigitsWithPeriods = 'separate_country_code_area_code_local_prefix_and_last_four_digits_with_periods';
    case SeparateCountryCodeAreaCodeLocalPrefixAndLastFourDigitsWithSpaces = 'separate_country_code_area_code_local_prefix_and_last_four_digits_with_spaces';
    case UseNorthAmericanNumberingPlanFormat = 'use_north_american_numbering_plan_format';
    case UseSpaceAfterCountryCode = 'use_space_after_country_code';
}
