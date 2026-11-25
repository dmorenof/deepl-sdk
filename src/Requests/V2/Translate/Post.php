<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V2\Translate;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'target_lang',
        'text',
    ];

    protected const array VALIDATION = [
        'glossary_ids' => [
            'maxItems' => 5,
        ],
        'translation_memory_threshold' => [
            'minimum' => 0,
            'maximum' => 100,
        ],
    ];

    /**
     * Additional context that can influence a translation but is not translated itself.
     *
     * Characters included in the `context` parameter will not be counted toward billing.
     */
    public string $context;
    /**
     * Specify a list of instructions to customize the translation behavior. Up to 10 custom instructions can be specified, each with a maximum of 300 characters.
     */
    public \DeepLSDK\Collections\StringCollection $custom_instructions;
    /**
     * This parameter is maintained for backward compatibility and has no effect.
     *
     * @deprecated
     */
    public bool $enable_beta_languages;
    public \DeepLSDK\Enums\Formality $formality;
    /**
     * Specify the glossary to use for the translation. The glossary needs a dictionary for the
     * language pair of the request.
     *
     * If `source_lang` is omitted, DeepL detects the source language and uses the dictionary for
     * the detected language pair. The request returns a `400` if the glossary has no dictionary
     * for that pair.
     *
     * Cannot be used together with `glossary_ids`.
     * Example: "def3a26b-3e84-45b3-84ae-0c0aaf3525f7"
     */
    public string $glossary_id;
    /**
     * Specify up to 5 glossaries to use for the translation, as an array of glossary IDs. Each glossary's matching terms are applied to the translation.
     *
     * Every listed glossary must contain a dictionary for the requested language pair.
     *
     * If `source_lang` is omitted, DeepL detects the source language and every listed glossary must
     * contain a dictionary for the detected language pair. A single glossary without a matching
     * dictionary returns a `400` for the whole request.
     *
     * Cannot be used together with `glossary_id`.
     */
    public \DeepLSDK\Collections\StringCollection $glossary_ids {
        set {
            $this->assigning('glossary_ids', $value);
            $this->glossary_ids = $value;
        }
    }
    /**
     * Comma-separated list of XML tags that indicate text not to be translated.
     */
    public \DeepLSDK\Collections\StringCollection $ignore_tags;
    public \DeepLSDK\Enums\ModelType $model_type;
    /**
     * Comma-separated list of XML tags which never split sentences.
     */
    public \DeepLSDK\Collections\StringCollection $non_splitting_tags;
    /**
     * Disable the automatic detection of XML structure by setting the `outline_detection` parameter
     * to `false` and selecting the tags that should be considered structure tags. This will split sentences
     * using the `splitting_tags` parameter.
     */
    public bool $outline_detection;
    /**
     * Sets whether the translation engine should respect the original formatting, even if it would usually
     * correct some aspects.
     */
    public bool $preserve_formatting;
    /**
     * When true, the response will include the billed_characters parameter, giving the
     * number of characters from the request that will be counted by DeepL for billing purposes.
     */
    public bool $show_billed_characters;
    /**
     * Language of the text to be translated. If this parameter is omitted, the API will attempt to
     * detect the language of the text and translate it.
     *
     * For the full list of supported source languages, see [supported languages](https://developers.deepl.com/docs/getting-started/supported-languages) or query the [`GET /v3/languages` endpoint](https://developers.deepl.com/docs/languages/using-the-languages-api).
     */
    public string $source_lang;
    public \DeepLSDK\Enums\SplitSentencesOption $split_sentences;
    /**
     * Comma-separated list of XML tags which always cause splits.
     */
    public \DeepLSDK\Collections\StringCollection $splitting_tags;
    /**
     * Specify the [style rule list](/docs/customize/using-style-rules) to use for the translation.
     *
     * **Important:** The target language has to match the language of the style rule list. A list
     * created for a root language (for example `en`) applies to that language and all of its variants
     * (`EN-GB`, `EN-US`). A list created for a variant (for example `en-GB`) applies only when
     * `target_lang` is that variant.
     *
     * All `model_type` values are supported.
     * Example: "7ff9bfd6-cd85-4190-8503-d6215a321519"
     */
    public string $style_id;
    /**
     * Translate with a [style profile](/api-reference/style-profiles/list-all-style-profiles): its glossaries,
     * style rule lists and translation memories through one ID. The profile is applied per text once the
     * source language is known: the glossaries with a dictionary for the text's language pair, the style
     * rule list for the target language, and the translation memories whose source language matches the
     * text. A component that does not fit a text's language pair is left out for that text; this is not an
     * error.
     *
     * Cannot be combined with `glossary_id`, `glossary_ids`, `style_id`, `translation_memory_id`,
     * `translation_memory_threshold` or `custom_instructions`. A request that combines them is rejected
     * with `400 Bad Request`. A style profile that does not exist or that your account cannot access is
     * rejected with `404 Not Found`.
     * Example: "3f1c9d0e-7a24-4b58-9c31-8f0e5d2a1b47"
     * Format: uuid
     */
    public string $style_profile_id;
    public \DeepLSDK\Enums\Tag\HandlingOption $tag_handling;
    public \DeepLSDK\Enums\Tag\HandlingVersionOption $tag_handling_version;
    /**
     * The language into which the text should be translated.
     *
     * For the full list of supported target languages, see [supported languages](https://developers.deepl.com/docs/getting-started/supported-languages) or query the [`GET /v3/languages` endpoint](https://developers.deepl.com/docs/languages/using-the-languages-api).
     */
    public string $target_lang;
    /**
     * Text to be translated. Only UTF-8-encoded plain text is supported. The parameter may be specified
     * many times in a single request, within the request size limit (128KiB). Translations are returned
     * in the same order as they are requested. Each text in the array is translated independently — texts
     * do not share context with each other.
     */
    public \DeepLSDK\Collections\StringCollection $text;
    /**
     * A unique ID assigned to a translation memory.
     * Format: uuid
     */
    public string $translation_memory_id;
    /**
     * The minimum matching percentage required for a translation memory segment to be applied (recommended to be 75% or higher). A value below 50 is treated as 50.
     */
    public int $translation_memory_threshold {
        set {
            $this->assigning('translation_memory_threshold', $value);
            $this->translation_memory_threshold = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'context' => is_string($value) ? $this->context = $value : parent::assignMember($name, $value),
            'custom_instructions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->custom_instructions = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'enable_beta_languages' => is_bool($value) ? $this->enable_beta_languages = $value : parent::assignMember($name, $value),
            'formality' => is_string($value) ? $this->formality = \DeepLSDK\Enums\Formality::from($value) : parent::assignMember($name, $value),
            'glossary_id' => is_string($value) ? $this->glossary_id = $value : parent::assignMember($name, $value),
            'glossary_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->glossary_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'ignore_tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ignore_tags = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'model_type' => is_string($value) ? $this->model_type = \DeepLSDK\Enums\ModelType::from($value) : parent::assignMember($name, $value),
            'non_splitting_tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->non_splitting_tags = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'outline_detection' => is_bool($value) ? $this->outline_detection = $value : parent::assignMember($name, $value),
            'preserve_formatting' => is_bool($value) ? $this->preserve_formatting = $value : parent::assignMember($name, $value),
            'show_billed_characters' => is_bool($value) ? $this->show_billed_characters = $value : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = $value : parent::assignMember($name, $value),
            'split_sentences' => is_string($value) ? $this->split_sentences = \DeepLSDK\Enums\SplitSentencesOption::from($value) : parent::assignMember($name, $value),
            'splitting_tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->splitting_tags = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'style_id' => is_string($value) ? $this->style_id = $value : parent::assignMember($name, $value),
            'style_profile_id' => is_string($value) ? $this->style_profile_id = $value : parent::assignMember($name, $value),
            'tag_handling' => is_string($value) ? $this->tag_handling = \DeepLSDK\Enums\Tag\HandlingOption::from($value) : parent::assignMember($name, $value),
            'tag_handling_version' => is_string($value) ? $this->tag_handling_version = \DeepLSDK\Enums\Tag\HandlingVersionOption::from($value) : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = $value : parent::assignMember($name, $value),
            'text' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->text = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'translation_memory_id' => is_string($value) ? $this->translation_memory_id = $value : parent::assignMember($name, $value),
            'translation_memory_threshold' => is_int($value) ? $this->translation_memory_threshold = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
