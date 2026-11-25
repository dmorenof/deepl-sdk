<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V2\Document;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
        'target_lang',
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
     * Specify a list of instructions to customize the translation behavior, as a JSON array of strings, for example `["Use a friendly, diplomatic tone"]`. Up to 10 custom instructions can be specified, each with a maximum of 300 characters.
     *
     * Rejected with `400` before the upload is accepted if the value is not a JSON array of strings or exceeds these limits.
     * Example: "[\"Use a friendly, diplomatic tone\"]"
     */
    public string $custom_instructions;
    /**
     * This parameter is maintained for backward compatibility and has no effect.
     *
     * @deprecated
     */
    public bool $enable_beta_languages;
    /**
     * (beta) When `true`, DeepL also evaluates the finished translation and returns a `quality_evaluation_job_id`. Poll [`GET /v1/quality-evaluations/{job_id}`](/api-reference/quality-evaluations/poll) with it for a per-segment report of translation issues. The translation itself is unaffected.
     *
     * **Important:** Available to select customers; contact your customer success manager to enable it. Supported for `docx`, `pptx`, `pdf`, `srt`, `idml`, `xml`, `dita`, `mif`, and XLIFF 2.1 uploads, and for the [supported language pairs](/api-reference/quality-evaluations/poll#supported-language-pairs) only.
     *
     * Rejected before the upload is accepted: `403` if quality evaluation is not enabled for the account, `400` for an ineligible file type, an unsupported language pair, or a value other than `true` or `false`.
     */
    public bool $enable_quality_evaluation;
    /**
     * When `true`, adds a "Translated by DeepL" watermark to the translated document.
     *
     * Only supported for `docx` and `pdf` output. For all other output formats the parameter is ignored and the document is returned without a watermark.
     */
    public bool $enable_watermark;
    /**
     * The document file to be translated. The file name should be included in this part's content disposition. As an alternative, the filename parameter can be used. The following file types and extensions are supported:
     *   * `docx` - Microsoft Word Document
     *   * `pptx` - Microsoft PowerPoint Document
     *   * `xlsx` - Microsoft Excel Document
     *   * `xlsm` - Microsoft Excel Macro-Enabled Workbook
     *   * `pdf` - Portable Document Format
     *   * `htm / html` - HTML Document
     *   * `txt` - Plain Text Document
     *   * `xlf / xliff` - XLIFF Document (versions 1.2, 2.0, and 2.1)
     *   * `srt` - SRT Document
     *   * `vtt` - WebVTT Subtitle Document
     *   * `idml` - Adobe InDesign Markup Language
     *   * `xml` - XML Document
     *   * `json` - JSON Document
     *   * `yaml / yml` - YAML Document
     *   * `properties` - Java Properties Document
     *   * `strings` - iOS/macOS Strings Document
     *   * `md / markdown` - Markdown Document
     *   * `dita` - DITA topic (Darwin Information Typing Architecture)
     *   * `mif` - Adobe FrameMaker Interchange Format
     *   * `zip` - SCORM Package (e-learning content)
     *   * `odt` - OpenDocument Text Document
     *   * `rtf` - Rich Text Format Document
     *   * `resx` - .NET Resource Document
     *   * `jpeg` / `jpg` / `png` - Image
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;
    /**
     * The name of the uploaded file. Can be used as an alternative to including the file name in the file part's content disposition.
     */
    public string $filename;
    public \DeepLSDK\Enums\Formality $formality;
    /**
     * A unique ID assigned to a glossary. To check glossary support for a language pair, call `GET /v3/languages?resource=translate_document` and verify the `glossary` feature key is present on both the source and target language.
     *
     * Requires the `source_lang` parameter. The request returns a `400` if `source_lang` is omitted.
     *
     * Cannot be used together with `glossary_ids`.
     * Example: "def3a26b-3e84-45b3-84ae-0c0aaf3525f7"
     */
    public string $glossary_id;
    /**
     * Comma-separated list of up to 5 glossary IDs to use for the translation. Each glossary's matching terms are applied to the translated document. May also be sent as a repeated parameter.
     *
     * Every listed glossary must contain a dictionary for the requested language pair.
     *
     * Requires the `source_lang` parameter. The request returns a `400` if `source_lang` is omitted.
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
     * Comma-separated list of `key:value` conversion options, prefixed with a version, that control how the input document is converted before translation. For example: `version:1,suppress-image-types:all`.
     *
     * Supported keys:
     *
     *   * `suppress-image-types` - Leaves the specified types of images embedded in the document untranslated. The value is a hyphen-separated list of image content types (for example `logo-photo` suppresses logos and photos), or `all` to suppress every embedded image. Recognized image content types: `logo`, `icon`, `decorative`, `barcode`, `formula`, `signature`, `handwriting`, `stamp`, `screenshot`, `diagram`, `chart`, `photo`, `illustration`, `comic`, `music`, `infographic`, `table`, `text`, `other`, `unknown`. Only `pptx` documents support this key.
     *   * `json-placeholders` - Controls how brace-delimited placeholders in `json` string values are handled. `protect` (the default) keeps identifier-shaped placeholders such as `{stars}` or `{{userName}}` verbatim so they are not translated; `translate` translates them along with the surrounding text. ICU MessageFormat skeletons such as `{count, plural, one {# item} other {# items}}` are always protected, with only the branch text translated, in both modes. Multi-word groups such as `{see note}` are treated as translatable text in both modes.
     *
     * For other file types this parameter is ignored. Unrecognized keys are ignored.
     * Example: "version:1,suppress-image-types:all"
     */
    public string $input_conversion_options;
    /**
     * File extension of desired format of translated file, for example: `docx`. If unspecified, by default the translated file will be in the same format as the input file.
     *
     */
    public string $output_format;
    /**
     * Language of the text to be translated. If this parameter is omitted, the API will attempt to
     * detect the language of the text and translate it.
     *
     * For the full list of supported source languages, see [supported languages](https://developers.deepl.com/docs/getting-started/supported-languages) or query the [`GET /v3/languages` endpoint](https://developers.deepl.com/docs/languages/using-the-languages-api).
     */
    public string $source_lang;
    /**
     * Specify the [style rule list](/docs/customize/using-style-rules) to use for the translation.
     *
     * **Important:** The target language has to match the language of the style rule list. A list
     * created for a root language (for example `en`) applies to that language and all of its variants
     * (`EN-GB`, `EN-US`). A list created for a variant (for example `en-GB`) applies only when
     * `target_lang` is that variant.
     * Example: "7ff9bfd6-cd85-4190-8503-d6215a321519"
     */
    public string $style_id;
    /**
     * Translate with a [style profile](/api-reference/style-profiles/list-all-style-profiles): its glossaries,
     * style rule lists and translation memories through one ID. The profile is applied once the
     * document's source language is known: the glossaries with a dictionary for the language pair, the
     * style rule list for the target language, and the translation memories whose source language matches
     * the document. A component that does not fit the language pair is left out; this is not an error.
     *
     * Cannot be combined with `glossary_id`, `glossary_ids`, `style_id`, `translation_memory_id`,
     * `translation_memory_threshold` or `custom_instructions`. A request that combines them is rejected
     * with `400 Bad Request`.
     * A style profile that does not exist or that your account cannot access is not rejected at upload:
     * the document status reports an error with the message `Style profile not found.`.
     * Example: "3f1c9d0e-7a24-4b58-9c31-8f0e5d2a1b47"
     * Format: uuid
     */
    public string $style_profile_id;
    /**
     * The language into which the text should be translated.
     *
     * For the full list of supported target languages, see [supported languages](https://developers.deepl.com/docs/getting-started/supported-languages) or query the [`GET /v3/languages` endpoint](https://developers.deepl.com/docs/languages/using-the-languages-api).
     */
    public string $target_lang;
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
            'custom_instructions' => is_string($value) ? $this->custom_instructions = $value : parent::assignMember($name, $value),
            'enable_beta_languages' => is_bool($value) ? $this->enable_beta_languages = $value : parent::assignMember($name, $value),
            'enable_quality_evaluation' => is_bool($value) ? $this->enable_quality_evaluation = $value : parent::assignMember($name, $value),
            'enable_watermark' => is_bool($value) ? $this->enable_watermark = $value : parent::assignMember($name, $value),
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'formality' => is_string($value) ? $this->formality = \DeepLSDK\Enums\Formality::from($value) : parent::assignMember($name, $value),
            'glossary_id' => is_string($value) ? $this->glossary_id = $value : parent::assignMember($name, $value),
            'glossary_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->glossary_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'input_conversion_options' => is_string($value) ? $this->input_conversion_options = $value : parent::assignMember($name, $value),
            'output_format' => is_string($value) ? $this->output_format = $value : parent::assignMember($name, $value),
            'source_lang' => is_string($value) ? $this->source_lang = $value : parent::assignMember($name, $value),
            'style_id' => is_string($value) ? $this->style_id = $value : parent::assignMember($name, $value),
            'style_profile_id' => is_string($value) ? $this->style_profile_id = $value : parent::assignMember($name, $value),
            'target_lang' => is_string($value) ? $this->target_lang = $value : parent::assignMember($name, $value),
            'translation_memory_id' => is_string($value) ? $this->translation_memory_id = $value : parent::assignMember($name, $value),
            'translation_memory_threshold' => is_int($value) ? $this->translation_memory_threshold = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
