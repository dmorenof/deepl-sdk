<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum OrMixedEnum: string
{
    case UseBothFeminineAndMasculineForms = 'use_both_feminine_and_masculine_forms';
    case UseFeminineFormOnly = 'use_feminine_form_only';
    case UseInclusiveNounsAndAdjectives = 'use_inclusive_nouns_and_adjectives';
    case UseMasculineFormOnly = 'use_masculine_form_only';
    case UseNeutralNounsAndAdjectives = 'use_neutral_nouns_and_adjectives';
}
