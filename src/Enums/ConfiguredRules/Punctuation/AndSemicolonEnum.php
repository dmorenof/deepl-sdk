<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum AndSemicolonEnum: string
{
    case UseCommaBetweenClauses = 'use_comma_between_clauses';
    case UseSemicolonBetweenClauses = 'use_semicolon_between_clauses';
}
