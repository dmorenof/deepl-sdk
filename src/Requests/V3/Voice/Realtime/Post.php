<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\Voice\Realtime;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source_media_content_type',
    ];

    protected const array VALIDATION = [
        'target_languages' => [
            'maxItems' => 5,
        ],
        'target_media_languages' => [
            'maxItems' => 1,
        ],
    ];

    public \DeepLSDK\Enums\Voice\Formality $formality;
    /**
     * Specify the glossary to use for the target transcripts (translations). For new integrations we
     * recommend the more general `glossary_ids`.
     *
     * Cannot be used together with `glossary_ids`.
     * Example: "def3a26b-3e84-45b3-84ae-0c0aaf3525f7"
     */
    public string $glossary_id;
    /**
     * Specify the glossaries to use for the target transcripts (translations), as an array of
     * glossary IDs ordered by priority (highest first). Each glossary's matching terms are applied to
     * the translation; where entries conflict, the higher-priority glossary wins. Unknown glossary IDs
     * are ignored.
     *
     * In realtime Voice, glossary terms are matched against the streaming source transcription,
     * which affects how and when terms are applied. See
     * [Glossaries in realtime Voice](/docs/voice/overview#glossaries-in-realtime-voice).
     *
     * Cannot be used together with `glossary_id`. Requests that exceed the
     * [session limit](/docs/voice/voice-api-requirements#session-limits), contain duplicates, or
     * combine `glossary_ids` with `glossary_id` are rejected with a `400 Bad Request` before a
     * session is created.
     */
    public \DeepLSDK\Collections\StringCollection $glossary_ids;
    public \DeepLSDK\Enums\Voice\MessageFormat $message_format;
    public \DeepLSDK\Enums\Voice\SourceLanguage $source_language;
    public \DeepLSDK\Enums\Voice\SourceLanguageMode $source_language_mode;
    public \DeepLSDK\Enums\Voice\SourceMediaContentType $source_media_content_type;
    /**
     * (beta) The ID of a Spoken Terms collection used to inform transcription.
     * Format: uuid
     */
    public string $spoken_terms_id;
    /**
     * List of target languages for translation. The stream will emit translations for each language. Language identifiers must comply with IETF BCP 47. See the [supported languages table](/docs/voice/supported-voice-languages) for details.
     *
     */
    public \DeepLSDK\Collections\V3\Voice\Realtime\Post\TargetLanguagesCollection $target_languages {
        set {
            $this->assigning('target_languages', $value);
            $this->target_languages = $value;
        }
    }
    public \DeepLSDK\Enums\Voice\TargetMediaContentType $target_media_content_type;
    /**
     * List of target languages for which to generate synthesized audio. Languages specified here will automatically be added to target_languages if not already present, ensuring you receive both text translation and audio synthesis for these languages. If omitted, only text transcription and translation will be provided (no audio synthesis). Language identifiers must comply with IETF BCP 47.
     * Note: Some translated audio languages are provided through external service partners. See the [supported languages table](/docs/voice/supported-voice-languages) for details.
     *
     */
    public \DeepLSDK\Collections\V3\Voice\Realtime\Post\MediaLanguagesCollection $target_media_languages {
        set {
            $this->assigning('target_media_languages', $value);
            $this->target_media_languages = $value;
        }
    }
    public \DeepLSDK\Enums\Voice\TargetMediaVoice $target_media_voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formality' => is_string($value) ? $this->formality = \DeepLSDK\Enums\Voice\Formality::from($value) : parent::assignMember($name, $value),
            'glossary_id' => is_string($value) ? $this->glossary_id = $value : parent::assignMember($name, $value),
            'glossary_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->glossary_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message_format' => is_string($value) ? $this->message_format = \DeepLSDK\Enums\Voice\MessageFormat::from($value) : parent::assignMember($name, $value),
            'source_language' => is_string($value) ? $this->source_language = \DeepLSDK\Enums\Voice\SourceLanguage::from($value) : parent::assignMember($name, $value),
            'source_language_mode' => is_string($value) ? $this->source_language_mode = \DeepLSDK\Enums\Voice\SourceLanguageMode::from($value) : parent::assignMember($name, $value),
            'source_media_content_type' => is_string($value) ? $this->source_media_content_type = \DeepLSDK\Enums\Voice\SourceMediaContentType::from($value) : parent::assignMember($name, $value),
            'spoken_terms_id' => is_string($value) ? $this->spoken_terms_id = $value : parent::assignMember($name, $value),
            'target_media_content_type' => is_string($value) ? $this->target_media_content_type = \DeepLSDK\Enums\Voice\TargetMediaContentType::from($value) : parent::assignMember($name, $value),
            'target_media_voice' => is_string($value) ? $this->target_media_voice = \DeepLSDK\Enums\Voice\TargetMediaVoice::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
