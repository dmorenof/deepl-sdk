<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Style;

final class Profile extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'creation_time',
        'glossary_ids',
        'glossary_priority_order_enabled',
        'name',
        'style_profile_id',
        'style_rule_ids',
        'translation_memory_ids',
        'updated_time',
    ];

    /**
     * The creation time of the style profile in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Example: "2026-04-01T16:34:25.223Z"
     * Format: date-time
     */
    public string $creation_time;
    /**
     * Free-text description of the style profile. At most 1000 characters. Omitted from the response
     * when the style profile has no description.
     * Example: "Contract wording for the German market."
     */
    public string $description;
    /**
     * The IDs of the glossaries linked to the style profile, highest priority first. The order only
     * takes effect with `glossary_priority_order_enabled`.
     * Example: ["4d0a2e1c-6b93-4f7a-8d15-2c6e9a3b7f81"]
     */
    public \DeepLSDK\Collections\StringCollection $glossary_ids;
    /**
     * Whether the order of `glossary_ids` sets priority: when two linked glossaries define the same
     * source term, the one listed first wins. When `false`, the order has no effect.
     * Example: true
     */
    public bool $glossary_priority_order_enabled;
    /**
     * The industry the style profile is written for. At most 255 characters. Omitted from the response
     * when the style profile has no industry.
     * Example: "Legal"
     */
    public string $industry;
    /**
     * Name associated with the style profile. At most 255 characters.
     * Example: "Legal, German"
     */
    public string $name;
    /**
     * A unique ID assigned to a style profile.
     * Format: uuid
     */
    public string $style_profile_id;
    /**
     * The IDs of the style rule lists linked to the style profile. A style profile links at most one
     * style rule list per target language.
     * Example: ["bd0a38f3-1831-440b-a8dd-2c702e2325ab"]
     */
    public \DeepLSDK\Collections\StringCollection $style_rule_ids;
    /**
     * The IDs of the translation memories linked to the style profile. A style profile links at most
     * one translation memory per source language.
     * Example: ["a74d88fb-ed2a-4943-a664-a4512398b994"]
     */
    public \DeepLSDK\Collections\StringCollection $translation_memory_ids;
    /**
     * The time of the last update to the style profile in the ISO 8601-1:2019 format (e.g.: `2021-08-03T14:16:18.329Z`).
     * Example: "2026-08-06T09:12:44.108Z"
     * Format: date-time
     */
    public string $updated_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'glossary_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->glossary_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'glossary_priority_order_enabled' => is_bool($value) ? $this->glossary_priority_order_enabled = $value : parent::assignMember($name, $value),
            'industry' => is_string($value) ? $this->industry = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'style_profile_id' => is_string($value) ? $this->style_profile_id = $value : parent::assignMember($name, $value),
            'style_rule_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->style_rule_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'translation_memory_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->translation_memory_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'updated_time' => is_string($value) ? $this->updated_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
