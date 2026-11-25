<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Style;

final class RuleList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'creation_time',
        'language',
        'name',
        'style_id',
        'updated_time',
        'version',
    ];

    public \DeepLSDK\DTOs\ConfiguredRules $configured_rules;
    /**
     * The creation time of the style rule list in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Format: date-time
     */
    public string $creation_time;
    /**
     * List of custom instructions enabled for the style rule list.
     */
    public \DeepLSDK\Collections\Style\RuleList\CustomInstructionsCollection $custom_instructions;
    public \DeepLSDK\Enums\Style\RuleLanguage $language;
    /**
     * Name associated with the style rule list.
     */
    public string $name;
    /**
     * A unique ID assigned to a style rule list.
     */
    public string $style_id;
    /**
     * The time of the style rule list when it was last updated in the ISO 8601-1:2019 format (e.g.: `2022-08-03T14:16:18.329Z`).
     * Format: date-time
     */
    public string $updated_time;
    /**
     * The version of the style rule list. Incremented when the style rule list is updated.
     * Example: 13
     */
    public int $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configured_rules' => $value instanceof \stdClass ? $this->configured_rules = new \DeepLSDK\DTOs\ConfiguredRules($value) : parent::assignMember($name, $value),
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'custom_instructions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->custom_instructions = new \DeepLSDK\Collections\Style\RuleList\CustomInstructionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\CustomInstruction::class)) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \DeepLSDK\Enums\Style\RuleLanguage::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'style_id' => is_string($value) ? $this->style_id = $value : parent::assignMember($name, $value),
            'updated_time' => is_string($value) ? $this->updated_time = $value : parent::assignMember($name, $value),
            'version' => is_int($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
