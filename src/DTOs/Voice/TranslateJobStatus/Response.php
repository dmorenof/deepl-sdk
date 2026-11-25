<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\TranslateJobStatus;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'job_id',
        'operation',
        'parameters',
        'product',
        'results',
        'source_file',
        'targets',
        'updated_at',
        'usage',
    ];

    /**
     * When the job was created (ISO 8601).
     * Format: date-time
     */
    public string $created_at;
    /**
     * The unique identifier of the job.
     * Format: uuid
     */
    public string $job_id;
    /**
     * The operation identifier.
     * Example: "translate"
     */
    public string $operation;
    public \DeepLSDK\DTOs\Voice\TranslateJobParameters\Response $parameters;
    /**
     * The product identifier.
     * Example: "voice"
     */
    public string $product;
    /**
     * Per-target processing results, in the same order as the `targets` array.
     */
    public \DeepLSDK\Collections\Voice\TranslateJobStatus\Response\ResultsCollection $results;
    public \DeepLSDK\DTOs\Job\SourceFile\Response $source_file;
    /**
     * The translation targets as specified in the create request.
     */
    public \DeepLSDK\Collections\Voice\TranslateJobStatus\Response\TargetsCollection $targets;
    /**
     * When the job was last updated (ISO 8601).
     * Format: date-time
     */
    public string $updated_at;
    public \DeepLSDK\DTOs\Job\Usage $usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'operation' => is_string($value) ? $this->operation = $value : parent::assignMember($name, $value),
            'parameters' => $value instanceof \stdClass ? $this->parameters = new \DeepLSDK\DTOs\Voice\TranslateJobParameters\Response($value) : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \DeepLSDK\Collections\Voice\TranslateJobStatus\Response\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Voice\TranslateJobTargetResult::class)) : parent::assignMember($name, $value),
            'source_file' => $value instanceof \stdClass ? $this->source_file = new \DeepLSDK\DTOs\Job\SourceFile\Response($value) : parent::assignMember($name, $value),
            'targets' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->targets = new \DeepLSDK\Collections\Voice\TranslateJobStatus\Response\TargetsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Voice\TranslateJobTarget\Response::class)) : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'usage' => $value instanceof \stdClass ? $this->usage = new \DeepLSDK\DTOs\Job\Usage($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
