<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\TranslationMemories;

final class Jobs extends \DeepLSDK\Client
{
    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v3/translation_memories/jobs/{job_id}',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            503 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\Jobs\\ByJobId\\ByJobIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\TranslationMemories\\Jobs\\ByJobId\\ByJobIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\TranslationMemory\\Job',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve an import or export job
     *
     * Retrieve the status of a translation memory import or export job.
     *
     * Poll this endpoint after creating a job. The `operation` field tells you which kind of job it is,
     * and the single entry in `results` carries the status and, once the job finishes, its output: the
     * new `translation_memory_id` for an import, or a `download_url` for an export.
     *
     * Requires an API key with the `translation_memories:read` scope.
     */
    public function getByJobId(string $job_id): \DeepLSDK\DTOs\TranslationMemory\Job
    {
        /** @var \DeepLSDK\DTOs\TranslationMemory\Job $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: ['job_id' => $job_id]);
        return $result;
    }

}
