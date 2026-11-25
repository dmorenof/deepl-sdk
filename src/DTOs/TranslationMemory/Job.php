<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory;

/**
 * The state of a translation memory import or export job. Fields that do not apply to the job's
 * `operation` are omitted.
 */
final class Job extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'creation_time',
        'job_id',
        'operation',
        'parameters',
        'product',
        'results',
        'updated_time',
    ];

    /**
     * The time the job was created, in the ISO 8601-1:2019 format.
     * Example: "2026-08-06T15:04:25.223Z"
     * Format: date-time
     */
    public string $creation_time;
    /**
     * The identifier of the job.
     * Example: "0f8b6c1e-4d2a-4c77-9a3e-1b5d8c9e2f40"
     * Format: uuid
     */
    public string $job_id;
    /**
     * Which kind of job this is.
     * Example: "import"
     */
    public \DeepLSDK\Enums\TranslationMemory\Job\OperationEnum $operation;
    /**
     * The parameters the job was created with. Import jobs report `display_name`; export jobs report
     * `translation_memory_id`.
     */
    public \DeepLSDK\DTOs\TranslationMemory\Job\ParametersDTO $parameters;
    /**
     * The DeepL product the job belongs to. Always `translation_memory`.
     * Example: "translation_memory"
     */
    public string $product;
    /**
     * The job's outcome. This array always holds exactly one entry. It is an array so that jobs
     * producing multiple outputs can be represented without a breaking change.
     */
    public \DeepLSDK\Collections\TranslationMemory\Job\ResultsCollection $results;
    /**
     * The file declared when the import job was created. Omitted for export jobs.
     */
    public \DeepLSDK\DTOs\TranslationMemory\Job\SourceFileDTO $source_file;
    /**
     * The time the job last changed state, in the ISO 8601-1:2019 format.
     * Example: "2026-08-06T15:06:11.418Z"
     * Format: date-time
     */
    public string $updated_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creation_time' => is_string($value) ? $this->creation_time = $value : parent::assignMember($name, $value),
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'operation' => is_string($value) ? $this->operation = \DeepLSDK\Enums\TranslationMemory\Job\OperationEnum::from($value) : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \DeepLSDK\Collections\TranslationMemory\Job\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\TranslationMemory\JobResult::class)) : parent::assignMember($name, $value),
            'updated_time' => is_string($value) ? $this->updated_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
