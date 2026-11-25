<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class AndToneDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Formatting options for Abbreviations
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\AbbreviationsEnum $abbreviations;
    /**
     * Formatting options for Addressing Non Binary People
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\BinaryPeopleEnum $addressing_non_binary_people;
    /**
     * Formatting options for Addressing The Reader
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\TheReaderEnum $addressing_the_reader;
    /**
     * Formatting options for Anglicisms
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\AnglicismsEnum $anglicisms;
    /**
     * Formatting options for Binary Representation Of Gender
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\RepresentationGenderEnum $binary_representation_of_gender;
    /**
     * Formatting options for Complex Sentences
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ComplexSentencesEnum $complex_sentences;
    /**
     * Formatting options for Country Names
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\CountryNamesEnum $country_names;
    /**
     * Formatting options for Declarative Endings
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DeclarativeEndingsEnum $declarative_endings;
    /**
     * Formatting options for Default First Person Pronoun
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\PersonPronounEnum $default_first_person_pronoun;
    /**
     * Formatting options for Default Second Person Pronoun
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DefaultSecondPersonPronoun\PersonPronounEnum $default_second_person_pronoun;
    /**
     * Formatting options for Directional Language
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DirectionalLanguageEnum $directional_language;
    /**
     * Formatting options for Double Negatives
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DoubleNegativesEnum $double_negatives;
    /**
     * Formatting options for Formality
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\FormalityEnum $formality;
    /**
     * Formatting options for Gender Neutral Language Readability
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\LanguageReadabilityEnum $gender_neutral_language_readability;
    /**
     * Formatting options for Gender Unspecified
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\GenderUnspecifiedEnum $gender_unspecified;
    /**
     * Formatting options for Gender Unspecified Or Mixed
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\OrMixedEnum $gender_unspecified_or_mixed;
    /**
     * Formatting options for Idioms Colloquialisms And Culture Specific References
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\SpecificReferencesEnum $idioms_colloquialisms_and_culture_specific_references;
    /**
     * Formatting options for Inflected Words Masculine Noun Agreement
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\NounAgreementEnum $inflected_words_masculine_noun_agreement;
    /**
     * Formatting options for Instructions Style
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\InstructionsStyleEnum $instructions_style;
    /**
     * Formatting options for Mixing Styles
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\MixingStylesEnum $mixing_styles;
    /**
     * Formatting options for Modal Verbs
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ModalVerbsEnum $modal_verbs;
    /**
     * Formatting options for Personal Vs Impersonal Style
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ImpersonalStyleEnum $personal_vs_impersonal_style;
    /**
     * Formatting options for Positive Vs Negative Language
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\NegativeLanguageEnum $positive_vs_negative_language;
    /**
     * Formatting options for Proximity Agreement
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ProximityAgreementEnum $proximity_agreement;
    /**
     * Formatting options for Reader Action Required
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ActionRequiredEnum $reader_action_required;
    /**
     * Formatting options for Redundant Introductory Phrases
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\IntroductoryPhrasesEnum $redundant_introductory_phrases;
    /**
     * Formatting options for Redundant Phrases
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\RedundantPhrasesEnum $redundant_phrases;
    /**
     * Formatting options for Referring To Non Binary People
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ReferringToNonBinaryPeople\BinaryPeopleEnum $referring_to_non_binary_people;
    /**
     * Formatting options for Short Vs Long Words
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\LongWordsEnum $short_vs_long_words;
    /**
     * Formatting options for Simple Words And Sentences
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\AndSentencesEnum $simple_words_and_sentences;
    /**
     * Formatting options for Text Position References
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\PositionReferencesEnum $text_position_references;
    /**
     * Formatting options for Tone
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ToneEnum $tone;
    /**
     * Formatting options for Verbal Vs Nominal Style
     */
    public \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\NominalStyleEnum $verbal_vs_nominal_style;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'abbreviations' => is_string($value) ? $this->abbreviations = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\AbbreviationsEnum::from($value) : parent::assignMember($name, $value),
            'addressing_non_binary_people' => is_string($value) ? $this->addressing_non_binary_people = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\BinaryPeopleEnum::from($value) : parent::assignMember($name, $value),
            'addressing_the_reader' => is_string($value) ? $this->addressing_the_reader = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\TheReaderEnum::from($value) : parent::assignMember($name, $value),
            'anglicisms' => is_string($value) ? $this->anglicisms = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\AnglicismsEnum::from($value) : parent::assignMember($name, $value),
            'binary_representation_of_gender' => is_string($value) ? $this->binary_representation_of_gender = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\RepresentationGenderEnum::from($value) : parent::assignMember($name, $value),
            'complex_sentences' => is_string($value) ? $this->complex_sentences = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ComplexSentencesEnum::from($value) : parent::assignMember($name, $value),
            'country_names' => is_string($value) ? $this->country_names = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\CountryNamesEnum::from($value) : parent::assignMember($name, $value),
            'declarative_endings' => is_string($value) ? $this->declarative_endings = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DeclarativeEndingsEnum::from($value) : parent::assignMember($name, $value),
            'default_first_person_pronoun' => is_string($value) ? $this->default_first_person_pronoun = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\PersonPronounEnum::from($value) : parent::assignMember($name, $value),
            'default_second_person_pronoun' => is_string($value) ? $this->default_second_person_pronoun = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DefaultSecondPersonPronoun\PersonPronounEnum::from($value) : parent::assignMember($name, $value),
            'directional_language' => is_string($value) ? $this->directional_language = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DirectionalLanguageEnum::from($value) : parent::assignMember($name, $value),
            'double_negatives' => is_string($value) ? $this->double_negatives = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\DoubleNegativesEnum::from($value) : parent::assignMember($name, $value),
            'formality' => is_string($value) ? $this->formality = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\FormalityEnum::from($value) : parent::assignMember($name, $value),
            'gender_neutral_language_readability' => is_string($value) ? $this->gender_neutral_language_readability = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\LanguageReadabilityEnum::from($value) : parent::assignMember($name, $value),
            'gender_unspecified' => is_string($value) ? $this->gender_unspecified = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\GenderUnspecifiedEnum::from($value) : parent::assignMember($name, $value),
            'gender_unspecified_or_mixed' => is_string($value) ? $this->gender_unspecified_or_mixed = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\OrMixedEnum::from($value) : parent::assignMember($name, $value),
            'idioms_colloquialisms_and_culture_specific_references' => is_string($value) ? $this->idioms_colloquialisms_and_culture_specific_references = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\SpecificReferencesEnum::from($value) : parent::assignMember($name, $value),
            'inflected_words_masculine_noun_agreement' => is_string($value) ? $this->inflected_words_masculine_noun_agreement = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\NounAgreementEnum::from($value) : parent::assignMember($name, $value),
            'instructions_style' => is_string($value) ? $this->instructions_style = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\InstructionsStyleEnum::from($value) : parent::assignMember($name, $value),
            'mixing_styles' => is_string($value) ? $this->mixing_styles = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\MixingStylesEnum::from($value) : parent::assignMember($name, $value),
            'modal_verbs' => is_string($value) ? $this->modal_verbs = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ModalVerbsEnum::from($value) : parent::assignMember($name, $value),
            'personal_vs_impersonal_style' => is_string($value) ? $this->personal_vs_impersonal_style = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ImpersonalStyleEnum::from($value) : parent::assignMember($name, $value),
            'positive_vs_negative_language' => is_string($value) ? $this->positive_vs_negative_language = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\NegativeLanguageEnum::from($value) : parent::assignMember($name, $value),
            'proximity_agreement' => is_string($value) ? $this->proximity_agreement = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ProximityAgreementEnum::from($value) : parent::assignMember($name, $value),
            'reader_action_required' => is_string($value) ? $this->reader_action_required = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ActionRequiredEnum::from($value) : parent::assignMember($name, $value),
            'redundant_introductory_phrases' => is_string($value) ? $this->redundant_introductory_phrases = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\IntroductoryPhrasesEnum::from($value) : parent::assignMember($name, $value),
            'redundant_phrases' => is_string($value) ? $this->redundant_phrases = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\RedundantPhrasesEnum::from($value) : parent::assignMember($name, $value),
            'referring_to_non_binary_people' => is_string($value) ? $this->referring_to_non_binary_people = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ReferringToNonBinaryPeople\BinaryPeopleEnum::from($value) : parent::assignMember($name, $value),
            'short_vs_long_words' => is_string($value) ? $this->short_vs_long_words = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\LongWordsEnum::from($value) : parent::assignMember($name, $value),
            'simple_words_and_sentences' => is_string($value) ? $this->simple_words_and_sentences = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\AndSentencesEnum::from($value) : parent::assignMember($name, $value),
            'text_position_references' => is_string($value) ? $this->text_position_references = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\PositionReferencesEnum::from($value) : parent::assignMember($name, $value),
            'tone' => is_string($value) ? $this->tone = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\ToneEnum::from($value) : parent::assignMember($name, $value),
            'verbal_vs_nominal_style' => is_string($value) ? $this->verbal_vs_nominal_style = \DeepLSDK\Enums\ConfiguredRules\StyleAndTone\NominalStyleEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
