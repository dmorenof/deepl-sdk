<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class AndGrammarDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'accents_in_verbs_conjugated_like_french_word_céder' => 'accents_in_verbs_conjugated_like_french_word_ceder',
];
    protected const array WIRE_PROPERTY_MAP = [
    'accents_in_verbs_conjugated_like_french_word_ceder' => 'accents_in_verbs_conjugated_like_french_word_céder',
];

    /**
     * Formatting options for Abbreviating French Word Numero
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordNumeroEnum $abbreviating_french_word_numero;
    /**
     * Formatting options for Abbreviation Usage
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AbbreviationUsageEnum $abbreviation_usage;
    /**
     * Formatting options for Accents And Cedillas
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AndCedillasEnum $accents_and_cedillas;
    /**
     * Formatting options for Accents In Verbs Conjugated Like French Word Céder
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordCederEnum $accents_in_verbs_conjugated_like_french_word_ceder;
    /**
     * Formatting options for Accents With Subject Verb Inversion
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\VerbInversionEnum $accents_with_subject_verb_inversion;
    /**
     * Formatting options for Active Passive Voice
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\PassiveVoiceEnum $active_passive_voice;
    /**
     * Formatting options for All Caps
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CapsEnum $all_caps;
    /**
     * Formatting options for Complete Sentences
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CompleteSentencesEnum $complete_sentences;
    /**
     * Formatting options for Compound Nouns
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CompoundNounsEnum $compound_nouns;
    /**
     * Formatting options for Conjunctions
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ConjunctionsEnum $conjunctions;
    /**
     * Formatting options for Contractions
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ContractionsEnum $contractions;
    /**
     * Formatting options for Established Loanwords
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\EstablishedLoanwordsEnum $established_loanwords;
    /**
     * Formatting options for Eszett
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\EszettEnum $eszett;
    /**
     * Formatting options for Foreign Word Translation
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordTranslationEnum $foreign_word_translation;
    /**
     * Formatting options for French Verbs Ending In Eler And Eter
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AndEterEnum $french_verbs_ending_in_eler_and_eter;
    /**
     * Formatting options for I And U With Circumflex Accents
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CircumflexAccentsEnum $i_and_u_with_circumflex_accents;
    /**
     * Formatting options for Informal Address Pronouns
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AddressPronounsEnum $informal_address_pronouns;
    /**
     * Formatting options for Latin Abbreviations
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\LatinAbbreviationsEnum $latin_abbreviations;
    /**
     * Formatting options for Passive Voice
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\PassiveVoice\PassiveVoiceEnum $passive_voice;
    /**
     * Formatting options for Past Participle Of French Word Laisser Followed By Infinitive
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ByInfinitiveEnum $past_participle_of_french_word_laisser_followed_by_infinitive;
    /**
     * Formatting options for Personal Titles
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\PersonalTitlesEnum $personal_titles;
    /**
     * Formatting options for Pluralizing Foreign Words
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ForeignWordsEnum $pluralizing_foreign_words;
    /**
     * Formatting options for Quotation Modification
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\QuotationModificationEnum $quotation_modification;
    /**
     * Formatting options for Spanish Word Solo
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordSoloEnum $spanish_word_solo;
    /**
     * Formatting options for Special Characters
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\SpecialCharactersEnum $special_characters;
    /**
     * Formatting options for Spelled Out Numbers
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\OutNumbersEnum $spelled_out_numbers;
    /**
     * Formatting options for Umlauts
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\UmlautsEnum $umlauts;
    /**
     * Formatting options for Unestablished Loanwords
     */
    public \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\UnestablishedLoanwordsEnum $unestablished_loanwords;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'abbreviating_french_word_numero' => is_string($value) ? $this->abbreviating_french_word_numero = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordNumeroEnum::from($value) : parent::assignMember($name, $value),
            'abbreviation_usage' => is_string($value) ? $this->abbreviation_usage = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AbbreviationUsageEnum::from($value) : parent::assignMember($name, $value),
            'accents_and_cedillas' => is_string($value) ? $this->accents_and_cedillas = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AndCedillasEnum::from($value) : parent::assignMember($name, $value),
            'accents_in_verbs_conjugated_like_french_word_céder' => is_string($value) ? $this->accents_in_verbs_conjugated_like_french_word_ceder = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordCederEnum::from($value) : parent::assignMember($name, $value),
            'accents_with_subject_verb_inversion' => is_string($value) ? $this->accents_with_subject_verb_inversion = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\VerbInversionEnum::from($value) : parent::assignMember($name, $value),
            'active_passive_voice' => is_string($value) ? $this->active_passive_voice = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\PassiveVoiceEnum::from($value) : parent::assignMember($name, $value),
            'all_caps' => is_string($value) ? $this->all_caps = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CapsEnum::from($value) : parent::assignMember($name, $value),
            'complete_sentences' => is_string($value) ? $this->complete_sentences = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CompleteSentencesEnum::from($value) : parent::assignMember($name, $value),
            'compound_nouns' => is_string($value) ? $this->compound_nouns = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CompoundNounsEnum::from($value) : parent::assignMember($name, $value),
            'conjunctions' => is_string($value) ? $this->conjunctions = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ConjunctionsEnum::from($value) : parent::assignMember($name, $value),
            'contractions' => is_string($value) ? $this->contractions = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ContractionsEnum::from($value) : parent::assignMember($name, $value),
            'established_loanwords' => is_string($value) ? $this->established_loanwords = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\EstablishedLoanwordsEnum::from($value) : parent::assignMember($name, $value),
            'eszett' => is_string($value) ? $this->eszett = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\EszettEnum::from($value) : parent::assignMember($name, $value),
            'foreign_word_translation' => is_string($value) ? $this->foreign_word_translation = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordTranslationEnum::from($value) : parent::assignMember($name, $value),
            'french_verbs_ending_in_eler_and_eter' => is_string($value) ? $this->french_verbs_ending_in_eler_and_eter = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AndEterEnum::from($value) : parent::assignMember($name, $value),
            'i_and_u_with_circumflex_accents' => is_string($value) ? $this->i_and_u_with_circumflex_accents = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\CircumflexAccentsEnum::from($value) : parent::assignMember($name, $value),
            'informal_address_pronouns' => is_string($value) ? $this->informal_address_pronouns = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\AddressPronounsEnum::from($value) : parent::assignMember($name, $value),
            'latin_abbreviations' => is_string($value) ? $this->latin_abbreviations = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\LatinAbbreviationsEnum::from($value) : parent::assignMember($name, $value),
            'passive_voice' => is_string($value) ? $this->passive_voice = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\PassiveVoice\PassiveVoiceEnum::from($value) : parent::assignMember($name, $value),
            'past_participle_of_french_word_laisser_followed_by_infinitive' => is_string($value) ? $this->past_participle_of_french_word_laisser_followed_by_infinitive = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ByInfinitiveEnum::from($value) : parent::assignMember($name, $value),
            'personal_titles' => is_string($value) ? $this->personal_titles = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\PersonalTitlesEnum::from($value) : parent::assignMember($name, $value),
            'pluralizing_foreign_words' => is_string($value) ? $this->pluralizing_foreign_words = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\ForeignWordsEnum::from($value) : parent::assignMember($name, $value),
            'quotation_modification' => is_string($value) ? $this->quotation_modification = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\QuotationModificationEnum::from($value) : parent::assignMember($name, $value),
            'spanish_word_solo' => is_string($value) ? $this->spanish_word_solo = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\WordSoloEnum::from($value) : parent::assignMember($name, $value),
            'special_characters' => is_string($value) ? $this->special_characters = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\SpecialCharactersEnum::from($value) : parent::assignMember($name, $value),
            'spelled_out_numbers' => is_string($value) ? $this->spelled_out_numbers = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\OutNumbersEnum::from($value) : parent::assignMember($name, $value),
            'umlauts' => is_string($value) ? $this->umlauts = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\UmlautsEnum::from($value) : parent::assignMember($name, $value),
            'unestablished_loanwords' => is_string($value) ? $this->unestablished_loanwords = \DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar\UnestablishedLoanwordsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
