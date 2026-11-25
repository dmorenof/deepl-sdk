<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\TranslateJobParameters;

/**
 * Processing parameters for the voice translation job.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Language of the source audio. If omitted, the language is detected automatically.
     */
    public string $source_language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'source_language' => is_string($value) ? $this->source_language = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
