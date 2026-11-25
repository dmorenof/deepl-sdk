<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum UnestablishedLoanwordsEnum: string
{
    case ParaphraseInKorean = 'paraphrase_in_korean';
    case UseAsIs = 'use_as_is';
    case UseAsIsWithExplanationInParentheses = 'use_as_is_with_explanation_in_parentheses';
}
