<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation;

/**
 * Done
 */
final class Done extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_id',
        'segments',
        'status',
    ];

    /**
     * Example: "04DE5AD98A02647D83285A36021911C6"
     */
    public string $job_id;
    /**
     * One entry per evaluated segment of the document, in reading order.
     */
    public \DeepLSDK\Collections\QualityEvaluation\Done\SegmentsCollection $segments;
    /**
     * Example: "done"
     */
    public \DeepLSDK\Enums\QualityEvaluation\Done\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'segments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->segments = new \DeepLSDK\Collections\QualityEvaluation\Done\SegmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\QualityEvaluation\Segment::class)) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\QualityEvaluation\Done\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
