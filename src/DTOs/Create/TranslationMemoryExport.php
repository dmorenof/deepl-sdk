<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Create;

/**
 * A reference to a translation memory export job.
 */
final class TranslationMemoryExport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'job_id',
        'parameters',
    ];

    /**
     * The identifier of the export job. Use it to poll the job's status.
     * Example: "7c2e5a91-3b8d-4f16-8e0a-6d4c2b7f9a13"
     * Format: uuid
     */
    public string $job_id;
    public \DeepLSDK\DTOs\Create\TranslationMemoryExport\ParametersDTO $parameters;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
