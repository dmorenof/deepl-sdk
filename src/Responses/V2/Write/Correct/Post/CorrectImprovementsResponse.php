<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Write\Correct\Post;

final class CorrectImprovementsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The language detected in the source text.
     * Example: "en"
     */
    public string $detected_source_language;
    /**
     * The target language specified by the request.
     * Example: "en-US"
     */
    public string $target_language;
    /**
     * The corrected text.
     * Example: "This is a sample sentence to improve."
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detected_source_language' => is_string($value) ? $this->detected_source_language = $value : parent::assignMember($name, $value),
            'target_language' => is_string($value) ? $this->target_language = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
