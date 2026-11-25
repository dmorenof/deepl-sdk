<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\QualityEvaluation;

final class Processing extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'job_id',
    'status',
];

    /**
     * Example: "04DE5AD98A02647D83285A36021911C6"
     */
    public string $job_id;
    /**
     * Example: "processing"
     */
    public \DeepLSDK\Enums\QualityEvaluation\Processing\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\QualityEvaluation\Processing\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
