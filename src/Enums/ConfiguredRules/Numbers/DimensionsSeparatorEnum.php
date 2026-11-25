<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum DimensionsSeparatorEnum: string
{
    case UseMultiplicationSignBetweenDimensionsWithSpaceOnEitherSide = 'use_multiplication_sign_between_dimensions_with_space_on_either_side';
    case UseMultiplicationSignBetweenDimensionsWithoutSpaceOnEitherSide = 'use_multiplication_sign_between_dimensions_without_space_on_either_side';
    case UseXBetweenDimensionsWithSpaceOnEitherSide = 'use_x_between_dimensions_with_space_on_either_side';
    case UseXBetweenDimensionsWithoutSpaceOnEitherSide = 'use_x_between_dimensions_without_space_on_either_side';
}
