<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Vocabulary;

enum LoanwordsEnum: string
{
    case AddExplanationToLoanwordIfDifficultToRephrase = 'add_explanation_to_loanword_if_difficult_to_rephrase';
    case RephraseLoanwordInDailyUseChineseOrJapaneseWordsIfPossible = 'rephrase_loanword_in_daily_use_chinese_or_japanese_words_if_possible';
    case RephraseLoanwordWithAnotherExpressionIfNotEstablished = 'rephrase_loanword_with_another_expression_if_not_established';
    case UseLoanwordAsIsIfWellEstablished = 'use_loanword_as_is_if_well_established';
}
