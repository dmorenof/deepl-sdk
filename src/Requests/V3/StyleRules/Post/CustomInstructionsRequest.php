<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\StyleRules\Post;

final class CustomInstructionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'label',
    'prompt',
];

    protected const array VALIDATION = [
    'prompt' => [
        'maxLength' => 300,
    ],
];

    /**
     * Label for the custom instruction
     */
    public string $label;
    /**
     * Instruction text
     */
    public string $prompt {
        set {
            $this->assigning('prompt', $value);
            $this->prompt = $value;
        }
    }
    /**
     * Optional source language code
     */
    public string $source_language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'prompt' => is_string($value) ? $this->prompt = $value : parent::assignMember($name, $value),
            'source_language' => is_string($value) ? $this->source_language = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
