<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum DecimalSeparatorEnum: string
{
    case UseCommaAndDoNotUseThousandsSeparator = 'use_comma_and_do_not_use_thousands_separator';
    case UseCommaAsDecimalSeparator = 'use_comma_as_decimal_separator';
    case UseCommaDoNotUseThousandsSeparatorAndUsePeriodOnlyForRadioStations = 'use_comma_do_not_use_thousands_separator_and_use_period_only_for_radio_stations';
    case UsePeriodAndDoNotUseThousandsSeparator = 'use_period_and_do_not_use_thousands_separator';
    case UsePeriodAsDecimalSeparator = 'use_period_as_decimal_separator';
}
