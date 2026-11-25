<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum BreakIndicatorEnum: string
{
    case UseEmDashWithSpaceOnEitherSide = 'use_em_dash_with_space_on_either_side';
    case UseEmDashWithoutSpaceOnEitherSide = 'use_em_dash_without_space_on_either_side';
    case UseEnDashWithSpaceOnEitherSide = 'use_en_dash_with_space_on_either_side';
}
