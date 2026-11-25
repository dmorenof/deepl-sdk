<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class PunctuationDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Formatting options for Abbreviations
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AbbreviationsEnum $abbreviations;
    /**
     * Formatting options for Acronyms
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AcronymsEnum $acronyms;
    /**
     * Formatting options for Ampersand Abbreviation Spacing
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AbbreviationSpacingEnum $ampersand_abbreviation_spacing;
    /**
     * Formatting options for Ampersand Usage
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AmpersandUsageEnum $ampersand_usage;
    /**
     * Formatting options for Apostrophe
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\ApostropheEnum $apostrophe;
    /**
     * Formatting options for Bracket
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\BracketEnum $bracket;
    /**
     * Formatting options for Chinese Mixed With English
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\WithEnglishEnum $chinese_mixed_with_english;
    /**
     * Formatting options for Colon
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\ColonEnum $colon;
    /**
     * Formatting options for Colon Between Hours And Minutes Or Chapters And Verses
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndVersesEnum $colon_between_hours_and_minutes_or_chapters_and_verses;
    /**
     * Formatting options for Colon In Heading
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\InHeadingEnum $colon_in_heading;
    /**
     * Formatting options for Colon To Replace Versus Or To
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\OrToEnum $colon_to_replace_versus_or_to;
    /**
     * Formatting options for Comma After Conjunctive Adverbs
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\ConjunctiveAdverbsEnum $comma_after_conjunctive_adverbs;
    /**
     * Formatting options for Comma After I E And E G
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\EGEnum $comma_after_i_e_and_e_g;
    /**
     * Formatting options for Comma After Short Introductory Phrase
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\IntroductoryPhraseEnum $comma_after_short_introductory_phrase;
    /**
     * Formatting options for Comma And Semicolon
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndSemicolonEnum $comma_and_semicolon;
    /**
     * Formatting options for Corner Bracket And Periods
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndPeriodsEnum $corner_bracket_and_periods;
    /**
     * Formatting options for Corner Brackets And Periods
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\CornerBracketsAndPeriods\AndPeriodsEnum $corner_brackets_and_periods;
    /**
     * Formatting options for Dash
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\DashEnum $dash;
    /**
     * Formatting options for Ellipsis
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\EllipsisEnum $ellipsis;
    /**
     * Formatting options for Em Dash
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\EmDashEnum $em_dash;
    /**
     * Formatting options for Emphasis
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\EmphasisEnum $emphasis;
    /**
     * Formatting options for Exclamation Marks
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\ExclamationMarksEnum $exclamation_marks;
    /**
     * Formatting options for Explanatory Note Indicator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\NoteIndicatorEnum $explanatory_note_indicator;
    /**
     * Formatting options for Full Sentence In Round Brackets
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\RoundBracketsEnum $full_sentence_in_round_brackets;
    /**
     * Formatting options for Highlighting Specific Expressions
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SpecificExpressionsEnum $highlighting_specific_expressions;
    /**
     * Formatting options for Japanese Reference Materials
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\ReferenceMaterialsEnum $japanese_reference_materials;
    /**
     * Formatting options for Parentheses For Supplementary Information
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SupplementaryInformationEnum $parentheses_for_supplementary_information;
    /**
     * Formatting options for Passage Of Time And Movement Between Locations
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\BetweenLocationsEnum $passage_of_time_and_movement_between_locations;
    /**
     * Formatting options for Periods And Commas
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndCommasEnum $periods_and_commas;
    /**
     * Formatting options for Periods In Academic Degrees
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AcademicDegreesEnum $periods_in_academic_degrees;
    /**
     * Formatting options for Periods In Direct Quotes
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\DirectQuotesEnum $periods_in_direct_quotes;
    /**
     * Formatting options for Periods In Uppercase Initialisms And Acronyms
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndAcronymsEnum $periods_in_uppercase_initialisms_and_acronyms;
    /**
     * Formatting options for Plus Sign Usage
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SignUsageEnum $plus_sign_usage;
    /**
     * Formatting options for Possessives Of Proper Names Ending In S Style
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SStyleEnum $possessives_of_proper_names_ending_in_s_style;
    /**
     * Formatting options for Quotation Mark
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\QuotationMarkEnum $quotation_mark;
    /**
     * Formatting options for Quotation Mark And Apostrophe
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndApostropheEnum $quotation_mark_and_apostrophe;
    /**
     * Formatting options for Quotation Style
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\QuotationStyleEnum $quotation_style;
    /**
     * Formatting options for Range Indicator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\RangeIndicatorEnum $range_indicator;
    /**
     * Formatting options for Related Phrases Indicator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\PhrasesIndicatorEnum $related_phrases_indicator;
    /**
     * Formatting options for Round Brackets
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\RoundBrackets\RoundBracketsEnum $round_brackets;
    /**
     * Formatting options for Salutation
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SalutationEnum $salutation;
    /**
     * Formatting options for Sentence Break Indicator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\BreakIndicatorEnum $sentence_break_indicator;
    /**
     * Formatting options for Serial Comma
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SerialCommaEnum $serial_comma;
    /**
     * Formatting options for Setting Off Non Quoted Phrases
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\QuotedPhrasesEnum $setting_off_non_quoted_phrases;
    /**
     * Formatting options for Slash
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SlashEnum $slash;
    /**
     * Formatting options for Slash Usage
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\SlashUsageEnum $slash_usage;
    /**
     * Formatting options for Spacing And Punctuation
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndPunctuationEnum $spacing_and_punctuation;
    /**
     * Formatting options for Text In Round Brackets Referring To Previous Sentence
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\PreviousSentenceEnum $text_in_round_brackets_referring_to_previous_sentence;
    /**
     * Formatting options for Text In Round Brackets Supplementing Preceding Text
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\PrecedingTextEnum $text_in_round_brackets_supplementing_preceding_text;
    /**
     * Formatting options for Titles Of Books And Newspapers
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndNewspapersEnum $titles_of_books_and_newspapers;
    /**
     * Formatting options for Titles Of Creative Works Trade Names Laws And Regulations
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndRegulationsEnum $titles_of_creative_works_trade_names_laws_and_regulations;
    /**
     * Formatting options for Uppercase Acronyms
     */
    public \DeepLSDK\Enums\ConfiguredRules\Punctuation\UppercaseAcronymsEnum $uppercase_acronyms;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'abbreviations' => is_string($value) ? $this->abbreviations = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AbbreviationsEnum::from($value) : parent::assignMember($name, $value),
            'acronyms' => is_string($value) ? $this->acronyms = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AcronymsEnum::from($value) : parent::assignMember($name, $value),
            'ampersand_abbreviation_spacing' => is_string($value) ? $this->ampersand_abbreviation_spacing = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AbbreviationSpacingEnum::from($value) : parent::assignMember($name, $value),
            'ampersand_usage' => is_string($value) ? $this->ampersand_usage = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AmpersandUsageEnum::from($value) : parent::assignMember($name, $value),
            'apostrophe' => is_string($value) ? $this->apostrophe = \DeepLSDK\Enums\ConfiguredRules\Punctuation\ApostropheEnum::from($value) : parent::assignMember($name, $value),
            'bracket' => is_string($value) ? $this->bracket = \DeepLSDK\Enums\ConfiguredRules\Punctuation\BracketEnum::from($value) : parent::assignMember($name, $value),
            'chinese_mixed_with_english' => is_string($value) ? $this->chinese_mixed_with_english = \DeepLSDK\Enums\ConfiguredRules\Punctuation\WithEnglishEnum::from($value) : parent::assignMember($name, $value),
            'colon' => is_string($value) ? $this->colon = \DeepLSDK\Enums\ConfiguredRules\Punctuation\ColonEnum::from($value) : parent::assignMember($name, $value),
            'colon_between_hours_and_minutes_or_chapters_and_verses' => is_string($value) ? $this->colon_between_hours_and_minutes_or_chapters_and_verses = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndVersesEnum::from($value) : parent::assignMember($name, $value),
            'colon_in_heading' => is_string($value) ? $this->colon_in_heading = \DeepLSDK\Enums\ConfiguredRules\Punctuation\InHeadingEnum::from($value) : parent::assignMember($name, $value),
            'colon_to_replace_versus_or_to' => is_string($value) ? $this->colon_to_replace_versus_or_to = \DeepLSDK\Enums\ConfiguredRules\Punctuation\OrToEnum::from($value) : parent::assignMember($name, $value),
            'comma_after_conjunctive_adverbs' => is_string($value) ? $this->comma_after_conjunctive_adverbs = \DeepLSDK\Enums\ConfiguredRules\Punctuation\ConjunctiveAdverbsEnum::from($value) : parent::assignMember($name, $value),
            'comma_after_i_e_and_e_g' => is_string($value) ? $this->comma_after_i_e_and_e_g = \DeepLSDK\Enums\ConfiguredRules\Punctuation\EGEnum::from($value) : parent::assignMember($name, $value),
            'comma_after_short_introductory_phrase' => is_string($value) ? $this->comma_after_short_introductory_phrase = \DeepLSDK\Enums\ConfiguredRules\Punctuation\IntroductoryPhraseEnum::from($value) : parent::assignMember($name, $value),
            'comma_and_semicolon' => is_string($value) ? $this->comma_and_semicolon = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndSemicolonEnum::from($value) : parent::assignMember($name, $value),
            'corner_bracket_and_periods' => is_string($value) ? $this->corner_bracket_and_periods = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndPeriodsEnum::from($value) : parent::assignMember($name, $value),
            'corner_brackets_and_periods' => is_string($value) ? $this->corner_brackets_and_periods = \DeepLSDK\Enums\ConfiguredRules\Punctuation\CornerBracketsAndPeriods\AndPeriodsEnum::from($value) : parent::assignMember($name, $value),
            'dash' => is_string($value) ? $this->dash = \DeepLSDK\Enums\ConfiguredRules\Punctuation\DashEnum::from($value) : parent::assignMember($name, $value),
            'ellipsis' => is_string($value) ? $this->ellipsis = \DeepLSDK\Enums\ConfiguredRules\Punctuation\EllipsisEnum::from($value) : parent::assignMember($name, $value),
            'em_dash' => is_string($value) ? $this->em_dash = \DeepLSDK\Enums\ConfiguredRules\Punctuation\EmDashEnum::from($value) : parent::assignMember($name, $value),
            'emphasis' => is_string($value) ? $this->emphasis = \DeepLSDK\Enums\ConfiguredRules\Punctuation\EmphasisEnum::from($value) : parent::assignMember($name, $value),
            'exclamation_marks' => is_string($value) ? $this->exclamation_marks = \DeepLSDK\Enums\ConfiguredRules\Punctuation\ExclamationMarksEnum::from($value) : parent::assignMember($name, $value),
            'explanatory_note_indicator' => is_string($value) ? $this->explanatory_note_indicator = \DeepLSDK\Enums\ConfiguredRules\Punctuation\NoteIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'full_sentence_in_round_brackets' => is_string($value) ? $this->full_sentence_in_round_brackets = \DeepLSDK\Enums\ConfiguredRules\Punctuation\RoundBracketsEnum::from($value) : parent::assignMember($name, $value),
            'highlighting_specific_expressions' => is_string($value) ? $this->highlighting_specific_expressions = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SpecificExpressionsEnum::from($value) : parent::assignMember($name, $value),
            'japanese_reference_materials' => is_string($value) ? $this->japanese_reference_materials = \DeepLSDK\Enums\ConfiguredRules\Punctuation\ReferenceMaterialsEnum::from($value) : parent::assignMember($name, $value),
            'parentheses_for_supplementary_information' => is_string($value) ? $this->parentheses_for_supplementary_information = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SupplementaryInformationEnum::from($value) : parent::assignMember($name, $value),
            'passage_of_time_and_movement_between_locations' => is_string($value) ? $this->passage_of_time_and_movement_between_locations = \DeepLSDK\Enums\ConfiguredRules\Punctuation\BetweenLocationsEnum::from($value) : parent::assignMember($name, $value),
            'periods_and_commas' => is_string($value) ? $this->periods_and_commas = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndCommasEnum::from($value) : parent::assignMember($name, $value),
            'periods_in_academic_degrees' => is_string($value) ? $this->periods_in_academic_degrees = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AcademicDegreesEnum::from($value) : parent::assignMember($name, $value),
            'periods_in_direct_quotes' => is_string($value) ? $this->periods_in_direct_quotes = \DeepLSDK\Enums\ConfiguredRules\Punctuation\DirectQuotesEnum::from($value) : parent::assignMember($name, $value),
            'periods_in_uppercase_initialisms_and_acronyms' => is_string($value) ? $this->periods_in_uppercase_initialisms_and_acronyms = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndAcronymsEnum::from($value) : parent::assignMember($name, $value),
            'plus_sign_usage' => is_string($value) ? $this->plus_sign_usage = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SignUsageEnum::from($value) : parent::assignMember($name, $value),
            'possessives_of_proper_names_ending_in_s_style' => is_string($value) ? $this->possessives_of_proper_names_ending_in_s_style = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SStyleEnum::from($value) : parent::assignMember($name, $value),
            'quotation_mark' => is_string($value) ? $this->quotation_mark = \DeepLSDK\Enums\ConfiguredRules\Punctuation\QuotationMarkEnum::from($value) : parent::assignMember($name, $value),
            'quotation_mark_and_apostrophe' => is_string($value) ? $this->quotation_mark_and_apostrophe = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndApostropheEnum::from($value) : parent::assignMember($name, $value),
            'quotation_style' => is_string($value) ? $this->quotation_style = \DeepLSDK\Enums\ConfiguredRules\Punctuation\QuotationStyleEnum::from($value) : parent::assignMember($name, $value),
            'range_indicator' => is_string($value) ? $this->range_indicator = \DeepLSDK\Enums\ConfiguredRules\Punctuation\RangeIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'related_phrases_indicator' => is_string($value) ? $this->related_phrases_indicator = \DeepLSDK\Enums\ConfiguredRules\Punctuation\PhrasesIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'round_brackets' => is_string($value) ? $this->round_brackets = \DeepLSDK\Enums\ConfiguredRules\Punctuation\RoundBrackets\RoundBracketsEnum::from($value) : parent::assignMember($name, $value),
            'salutation' => is_string($value) ? $this->salutation = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SalutationEnum::from($value) : parent::assignMember($name, $value),
            'sentence_break_indicator' => is_string($value) ? $this->sentence_break_indicator = \DeepLSDK\Enums\ConfiguredRules\Punctuation\BreakIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'serial_comma' => is_string($value) ? $this->serial_comma = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SerialCommaEnum::from($value) : parent::assignMember($name, $value),
            'setting_off_non_quoted_phrases' => is_string($value) ? $this->setting_off_non_quoted_phrases = \DeepLSDK\Enums\ConfiguredRules\Punctuation\QuotedPhrasesEnum::from($value) : parent::assignMember($name, $value),
            'slash' => is_string($value) ? $this->slash = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SlashEnum::from($value) : parent::assignMember($name, $value),
            'slash_usage' => is_string($value) ? $this->slash_usage = \DeepLSDK\Enums\ConfiguredRules\Punctuation\SlashUsageEnum::from($value) : parent::assignMember($name, $value),
            'spacing_and_punctuation' => is_string($value) ? $this->spacing_and_punctuation = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndPunctuationEnum::from($value) : parent::assignMember($name, $value),
            'text_in_round_brackets_referring_to_previous_sentence' => is_string($value) ? $this->text_in_round_brackets_referring_to_previous_sentence = \DeepLSDK\Enums\ConfiguredRules\Punctuation\PreviousSentenceEnum::from($value) : parent::assignMember($name, $value),
            'text_in_round_brackets_supplementing_preceding_text' => is_string($value) ? $this->text_in_round_brackets_supplementing_preceding_text = \DeepLSDK\Enums\ConfiguredRules\Punctuation\PrecedingTextEnum::from($value) : parent::assignMember($name, $value),
            'titles_of_books_and_newspapers' => is_string($value) ? $this->titles_of_books_and_newspapers = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndNewspapersEnum::from($value) : parent::assignMember($name, $value),
            'titles_of_creative_works_trade_names_laws_and_regulations' => is_string($value) ? $this->titles_of_creative_works_trade_names_laws_and_regulations = \DeepLSDK\Enums\ConfiguredRules\Punctuation\AndRegulationsEnum::from($value) : parent::assignMember($name, $value),
            'uppercase_acronyms' => is_string($value) ? $this->uppercase_acronyms = \DeepLSDK\Enums\ConfiguredRules\Punctuation\UppercaseAcronymsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
