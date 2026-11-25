<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Translate\Post;

final class TranslateTranslationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Number of characters counted by DeepL for billing purposes. Only present if the show_billed_characters parameter is set to true.
     * Example: 42
     */
    public int $billed_characters;
    /**
     * The language detected in the source text. It reflects the value of the `source_lang` parameter, when specified.
     * Example: "EN"
     */
    public string $detected_source_language;
    /**
     * Indicates the translation model used. Only present if model_type parameter is included in the request.
     * Example: "quality_optimized"
     */
    public string $model_type_used;
    /**
     * The version of the tag handling algorithm used for the translation. Only present when the `tag_handling` parameter (`xml` or `html`) is set. If you don't specify `tag_handling_version`, this shows the default that was applied.
     * Example: "v2"
     */
    public \DeepLSDK\Enums\V2\Translate\Post\TranslationsItem\HandlingVersionEnum $tag_handling_version;
    /**
     * The translated text.
     * Example: "Hallo, Welt!"
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billed_characters' => is_int($value) ? $this->billed_characters = $value : parent::assignMember($name, $value),
            'detected_source_language' => is_string($value) ? $this->detected_source_language = $value : parent::assignMember($name, $value),
            'model_type_used' => is_string($value) ? $this->model_type_used = $value : parent::assignMember($name, $value),
            'tag_handling_version' => is_string($value) ? $this->tag_handling_version = \DeepLSDK\Enums\V2\Translate\Post\TranslationsItem\HandlingVersionEnum::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
