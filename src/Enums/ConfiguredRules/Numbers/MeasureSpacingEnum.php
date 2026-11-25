<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum MeasureSpacingEnum: string
{
    case DoNotUseSpaceBetweenNumeralAndUnitOfMeasure = 'do_not_use_space_between_numeral_and_unit_of_measure';
    case UseSpaceBetweenNumeralAndUnitOfMeasure = 'use_space_between_numeral_and_unit_of_measure';
}
