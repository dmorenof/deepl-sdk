<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\TranslateJobTarget;

/**
 * A translation target specifying the desired output language and format.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
    'type',
];

    /**
     * The language into which the text should be translated.
     *
     * For the full list of supported target languages, see [supported languages](https://developers.deepl.com/docs/getting-started/supported-languages) or query the [`GET /v3/languages` endpoint](https://developers.deepl.com/docs/languages/using-the-languages-api).
     */
    public string $language;
    public \DeepLSDK\Enums\Voice\TranslateJobTargetOutputType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \DeepLSDK\Enums\Voice\TranslateJobTargetOutputType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
