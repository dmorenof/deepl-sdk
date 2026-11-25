<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation;

final class Segment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'errors',
        'segment_index',
        'segment_score',
    ];

    protected const array VALIDATION = [
        'segment_score' => [
            'minimum' => 0,
            'maximum' => 100,
        ],
    ];

    /**
     * Glossary term pairs applied to this segment when the document was translated, so you can tell which customizations were in play where an issue was reported. Omitted when no term pair was applied.
     */
    public \DeepLSDK\Collections\QualityEvaluation\Segment\TermPairsCollection $applied_glossary_term_pairs;
    /**
     * Quality issues identified in this segment. Empty if no issues were found.
     */
    public \DeepLSDK\Collections\QualityEvaluation\Segment\ErrorsCollection $errors;
    /**
     * Zero-based index of this segment within the document, in reading order.
     * Example: 0
     */
    public int $segment_index;
    /**
     * Quality score for this segment, where 0 is lowest and 100 is highest.
     * Example: 38.5
     * Format: float
     */
    public float $segment_score {
        set {
            $this->assigning('segment_score', $value);
            $this->segment_score = $value;
        }
    }
    /**
     * The segment's source text as the evaluation read it. `source_spans` are offsets into this text. Omitted when the text is unavailable. See [Segment text](/api-reference/quality-evaluations/poll#segment-text).
     * Example: "Our Q3 revenue came in 5% above forecast."
     */
    public string $source;
    /**
     * The segment's translated text as the evaluation read it. `target_spans` are offsets into this text. Omitted when the text is unavailable. See [Segment text](/api-reference/quality-evaluations/poll#segment-text).
     * Example: "Unser Q3-Umsatz lag 5 % unter der Prognose."
     */
    public string $target;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applied_glossary_term_pairs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->applied_glossary_term_pairs = new \DeepLSDK\Collections\QualityEvaluation\Segment\TermPairsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\QualityEvaluation\AppliedGlossaryTermPair::class)) : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \DeepLSDK\Collections\QualityEvaluation\Segment\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\QualityEvaluation\Issue::class)) : parent::assignMember($name, $value),
            'segment_index' => is_int($value) ? $this->segment_index = $value : parent::assignMember($name, $value),
            'segment_score' => is_float($value) ? $this->segment_score = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'target' => is_string($value) ? $this->target = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
