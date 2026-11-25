<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation;

/**
 * A glossary term pair that was applied to the segment's translation.
 */
final class AppliedGlossaryTermPair extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ranges',
        'source_term',
        'target_term',
    ];

    /**
     * Spans in `target` where the target term was applied, using the same convention as `source_spans` and `target_spans`. See [Span ranges](/api-reference/quality-evaluations/poll#span-ranges).
     */
    public \DeepLSDK\Collections\QualityEvaluation\AppliedGlossaryTermPair\RangesCollection $ranges;
    /**
     * The source term, as defined in the glossary.
     * Example: "forecast"
     */
    public string $source_term;
    /**
     * The target term, as applied to the translation.
     * Example: "Prognose"
     */
    public string $target_term;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ranges' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->ranges = new \DeepLSDK\Collections\QualityEvaluation\AppliedGlossaryTermPair\RangesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\QualityEvaluation\Span::class)) : parent::assignMember($name, $value),
            'source_term' => is_string($value) ? $this->source_term = $value : parent::assignMember($name, $value),
            'target_term' => is_string($value) ? $this->target_term = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
