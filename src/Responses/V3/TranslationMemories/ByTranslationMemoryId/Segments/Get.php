<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\TranslationMemories\ByTranslationMemoryId\Segments;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'segment_count',
    'segments',
];

    /**
     * The cursor to pass as `page_cursor` to retrieve the next page. Absent on the last page.
     * Example: "eyJvZmZzZXQiOjUwfQ"
     */
    public string $next_page_cursor;
    /**
     * The total number of segments in the translation memory. This is not reduced by
     * `filter_text`, so a filtered request still reports the full count. Do not use it to
     * predict how many results a filtered query returns.
     * Example: 3542
     */
    public int $segment_count;
    /**
     * The segments on this page.
     */
    public \DeepLSDK\Collections\V3\TranslationMemories\ByTranslationMemoryId\Segments\Get\SegmentsSegmentsCollection $segments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'next_page_cursor' => is_string($value) ? $this->next_page_cursor = $value : parent::assignMember($name, $value),
            'segment_count' => is_int($value) ? $this->segment_count = $value : parent::assignMember($name, $value),
            'segments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->segments = new \DeepLSDK\Collections\V3\TranslationMemories\ByTranslationMemoryId\Segments\Get\SegmentsSegmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\TranslationMemory\Segment::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
