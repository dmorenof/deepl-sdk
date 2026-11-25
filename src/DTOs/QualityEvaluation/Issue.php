<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation;

final class Issue extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'explanation',
    'severity',
    'source_spans',
    'sub_type',
    'target_spans',
    'type',
];

    /**
     * Description of the issue. May span multiple sentences.
     * Example: "The source says revenue was '5% above forecast' but the translation says '5 % unter der Prognose' (5% below forecast). This completely reverses the meaning and has financial implications."
     */
    public string $explanation;
    /**
     * How serious the issue is. See [Severity values](/api-reference/quality-evaluations/poll#severity-values).
     * Example: "Critical"
     */
    public \DeepLSDK\Enums\QualityEvaluation\Issue\SeverityEnum $severity;
    /**
     * Spans on the segment's source text where this issue applies. Empty if no source-side highlight. See [Span ranges](/api-reference/quality-evaluations/poll#span-ranges).
     */
    public \DeepLSDK\Collections\QualityEvaluation\AppliedGlossaryTermPair\RangesCollection $source_spans;
    /**
     * Finer-grained category within `type`. See [Type and sub-type values](/api-reference/quality-evaluations/poll#type-and-sub-type-values).
     * Example: "Mistranslation"
     */
    public \DeepLSDK\Enums\QualityEvaluation\Issue\SubTypeEnum $sub_type;
    /**
     * Spans on the segment's target text where this issue applies. Empty if no target-side highlight. See [Span ranges](/api-reference/quality-evaluations/poll#span-ranges).
     */
    public \DeepLSDK\Collections\QualityEvaluation\AppliedGlossaryTermPair\RangesCollection $target_spans;
    /**
     * Top-level category of the issue. See [Type and sub-type values](/api-reference/quality-evaluations/poll#type-and-sub-type-values).
     * Example: "Accuracy"
     */
    public \DeepLSDK\Enums\QualityEvaluation\Issue\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'explanation' => is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            'severity' => is_string($value) ? $this->severity = \DeepLSDK\Enums\QualityEvaluation\Issue\SeverityEnum::from($value) : parent::assignMember($name, $value),
            'source_spans' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->source_spans = new \DeepLSDK\Collections\QualityEvaluation\AppliedGlossaryTermPair\RangesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\QualityEvaluation\Span::class)) : parent::assignMember($name, $value),
            'sub_type' => is_string($value) ? $this->sub_type = \DeepLSDK\Enums\QualityEvaluation\Issue\SubTypeEnum::from($value) : parent::assignMember($name, $value),
            'target_spans' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->target_spans = new \DeepLSDK\Collections\QualityEvaluation\AppliedGlossaryTermPair\RangesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\QualityEvaluation\Span::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \DeepLSDK\Enums\QualityEvaluation\Issue\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
