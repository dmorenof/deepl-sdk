<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\StyleProfiles\ByStyleProfileId;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A new description for the style profile. At most 1000 characters. Send an empty string
     * to clear it.
     * Example: "Contract wording for the German market, 2026 revision."
     */
    public string $description;
    /**
     * The IDs of the glossaries to link, highest priority first. The order only takes effect
     * with `glossary_priority_order_enabled`. Replaces the linked glossaries in full. Send an
     * empty list to unlink all of them.
     * Example: ["4d0a2e1c-6b93-4f7a-8d15-2c6e9a3b7f81"]
     */
    public \DeepLSDK\Collections\StringCollection $glossary_ids;
    /**
     * Whether the order of `glossary_ids` sets priority: when two linked glossaries define the
     * same source term, the one listed first wins. When `false`, the order has no effect.
     * Example: true
     */
    public bool $glossary_priority_order_enabled;
    /**
     * A new industry for the style profile. At most 255 characters. Send an empty string to
     * clear it.
     * Example: "Legal"
     */
    public string $industry;
    /**
     * A new name for the style profile. At most 255 characters. An empty string is rejected
     * with `400 Bad Request`.
     * Example: "Legal, German (2026)"
     */
    public string $name;
    /**
     * The IDs of the style rule lists to link. At most one style rule list per target
     * language. Replaces the linked style rule lists in full. Send an empty list to unlink
     * all of them.
     * Example: ["bd0a38f3-1831-440b-a8dd-2c702e2325ab"]
     */
    public \DeepLSDK\Collections\StringCollection $style_rule_ids;
    /**
     * The IDs of the translation memories to link. At most one translation memory per source
     * language. Replaces the linked translation memories in full. Send an empty list to
     * unlink all of them.
     * Example: ["a74d88fb-ed2a-4943-a664-a4512398b994"]
     */
    public \DeepLSDK\Collections\StringCollection $translation_memory_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'glossary_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->glossary_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'glossary_priority_order_enabled' => is_bool($value) ? $this->glossary_priority_order_enabled = $value : parent::assignMember($name, $value),
            'industry' => is_string($value) ? $this->industry = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'style_rule_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->style_rule_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'translation_memory_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->translation_memory_ids = new \DeepLSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
