<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * All enabled custom instructions for the style rule list
 */
final class CustomInstruction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'label',
    'prompt',
];

    /**
     * Unique identifier for the custom instruction
     * Example: "68fdb803-c013-4e67-b62e-1aad0ab519cd"
     */
    public string $id;
    /**
     * Name associated with the custom instruction
     * Example: "Currency custom instruction"
     */
    public string $label;
    /**
     * Prompt of the custom instruction
     * Example: "Have currency symbols before the numerical value (e.g. $100, €100)"
     */
    public string $prompt;
    /**
     * Optional source language of the custom instruction
     * Example: "en"
     */
    public string $source_language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'prompt' => is_string($value) ? $this->prompt = $value : parent::assignMember($name, $value),
            'source_language' => is_string($value) ? $this->source_language = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
