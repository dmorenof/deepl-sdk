<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum AbbreviationsEnum: string
{
    case AvoidAbbreviationsAndSymbolsThatCanBeSpelledOutEasily = 'avoid_abbreviations_and_symbols_that_can_be_spelled_out_easily';
    case UseAbbreviationsAndSymbols = 'use_abbreviations_and_symbols';
}
