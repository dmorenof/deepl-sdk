<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\StyleRules;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'language',
        'name',
    ];

    protected const array VALIDATION = [
        'custom_instructions' => [
            'maxItems' => 200,
        ],
    ];

    public \DeepLSDK\DTOs\ConfiguredRules $configured_rules;
    /**
     * Array of custom instruction objects
     */
    public \DeepLSDK\Collections\V3\StyleRules\Post\CustomInstructionsCollection $custom_instructions {
        set {
            $this->assigning('custom_instructions', $value);
            $this->custom_instructions = $value;
        }
    }
    public \DeepLSDK\Enums\Style\RuleLanguage $language;
    /**
     * Name associated with the style rule list.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configured_rules' => $value instanceof \stdClass ? $this->configured_rules = new \DeepLSDK\DTOs\ConfiguredRules($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \DeepLSDK\Enums\Style\RuleLanguage::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
