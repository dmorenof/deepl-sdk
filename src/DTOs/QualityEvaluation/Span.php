<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation;

/**
 * A half-open `[start, end)` range of Unicode code points within a segment's source or target text. See [Span ranges](/api-reference/quality-evaluations/poll#span-ranges).
 */
final class Span extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    /**
     * Exclusive end index. A 0-based Unicode code-point offset.
     * Example: 31
     */
    public int $end;
    /**
     * Inclusive start index. A 0-based Unicode code-point offset.
     * Example: 23
     */
    public int $start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => is_int($value) ? $this->end = $value : parent::assignMember($name, $value),
            'start' => is_int($value) ? $this->start = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
