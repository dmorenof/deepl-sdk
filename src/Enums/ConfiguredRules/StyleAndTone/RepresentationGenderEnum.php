<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum RepresentationGenderEnum: string
{
    case AvoidBinaryRepresentationOfGenderWhenGenderNeutralLanguageCanBeUsed = 'avoid_binary_representation_of_gender_when_gender_neutral_language_can_be_used';
    case ReplaceBinaryRepresentationsOfGenderWithGenderNeutralLanguage = 'replace_binary_representations_of_gender_with_gender_neutral_language';
    case UseNeutralPronouns = 'use_neutral_pronouns';
}
