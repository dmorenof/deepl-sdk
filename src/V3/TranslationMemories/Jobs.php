<?php

declare(strict_types=1);

namespace DeepLSDK\V3\TranslationMemories;

final class Jobs extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/translation_memories/jobs/{job_id} [operationId: getTranslationMemoryJob] */
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
    public static function getByJobId(string $job_id): \DeepLSDK\DTOs\TranslationMemory\Job
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\TranslationMemories\Jobs::class)->getByJobId($job_id);
    }
}
