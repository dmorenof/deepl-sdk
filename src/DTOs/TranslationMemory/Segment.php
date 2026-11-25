<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory;

/**
 * A source segment stored in a translation memory, with its translations.
 */
final class Segment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source_segment_id',
        'source_text',
        'targets',
    ];

    /**
     * The time the segment was added, in the ISO 8601-1:2019 format.
     * Example: "2026-04-01T16:34:25.223Z"
     * Format: date-time
     */
    public string $creation_time;
    /**
     * The time the segment was last applied to a translation, in the ISO 8601-1:2019 format. Absent
     * if the segment has never been used.
     * Example: "2026-08-05T11:02:18.771Z"
     * Format: date-time
     */
    public string $last_used_time;
    /**
     * A unique ID assigned to the source segment.
     * Example: "4f1c2d3e-8a9b-4c5d-9e6f-7a8b9c0d1e2f"
     */
    public string $source_segment_id;
    /**
     * The source text of the segment.
     * Example: "This agreement is governed by the laws of Germany."
     */
    public string $source_text;
    /**
     * The translations of this source segment, one per target language.
     */
    public \DeepLSDK\Collections\TranslationMemory\Segment\TargetsCollection $targets;
    /**
     * The time the segment was last changed, in the ISO 8601-1:2019 format.
     * Example: "2026-04-01T16:34:25.223Z"
     * Format: date-time
     */
    public string $updated_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'last_used_time' => is_string($value) ? $this->last_used_time = $value : parent::assignMember($name, $value),
            'source_segment_id' => is_string($value) ? $this->source_segment_id = $value : parent::assignMember($name, $value),
            'source_text' => is_string($value) ? $this->source_text = $value : parent::assignMember($name, $value),
            'targets' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->targets = new \DeepLSDK\Collections\TranslationMemory\Segment\TargetsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\TranslationMemory\TargetSegment::class)) : parent::assignMember($name, $value),
            'updated_time' => is_string($value) ? $this->updated_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
