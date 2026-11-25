<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V2\Write\Rephrase;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'text',
    ];

    public \DeepLSDK\Enums\TargetLanguageWrite $target_lang;
    /**
     * Text to be improved. Only UTF-8-encoded plain text is supported. Improvements are returned in the same order as they are requested.
     */
    public \DeepLSDK\Collections\StringCollection $text;
    public \DeepLSDK\Enums\WritingTone $tone;
    public \DeepLSDK\Enums\WritingStyle $writing_style;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'target_lang' => is_string($value) ? $this->target_lang = \DeepLSDK\Enums\TargetLanguageWrite::from($value) : parent::assignMember($name, $value),
            'text' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->text = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'tone' => is_string($value) ? $this->tone = \DeepLSDK\Enums\WritingTone::from($value) : parent::assignMember($name, $value),
            'writing_style' => is_string($value) ? $this->writing_style = \DeepLSDK\Enums\WritingStyle::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
