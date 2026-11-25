<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum WordNumeroEnum: string
{
    case AbbreviateAsNThenDegreeSymbol = 'abbreviate_as_n_then_degree_symbol';
    case AbbreviateAsNThenOInSuperscript = 'abbreviate_as_n_then_o_in_superscript';
    case AbbreviateAsNo = 'abbreviate_as_no';
}
