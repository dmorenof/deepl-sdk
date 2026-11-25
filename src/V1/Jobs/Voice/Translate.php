<?php

declare(strict_types=1);

namespace DeepLSDK\V1\Jobs\Voice;

final class Translate extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v1/jobs/voice/translate [operationId: createVoiceTranslateJob] */
    /**
     * Create a voice translation job
     *
     * Creates an async voice translation job. The response includes an upload URL for the source audio file.
     */
    public static function post(\DeepLSDK\PostParams\V1\Jobs\Voice\Translate $params): \DeepLSDK\DTOs\Voice\TranslateCreateJob\Response
    {
        return self::client()->resource(\DeepLSDK\Resources\V1\Jobs\Voice\Translate::class)->post($params);
    }

    /** GET /v1/jobs/voice/translate/{job_id} [operationId: getVoiceTranslateJobStatus] */
    /**
     * Get voice translation job status
     *
     * Returns the current status of a voice translation job, including per-target result statuses.
     *
     * When a target's status is `complete`, the response includes a `download_url` and `signature` for that target. Results are returned in the same order as the targets in the create request.
     */
    public static function getByJobId(string $job_id, ?\DeepLSDK\GetParams\V1\Jobs\Voice\Translate\ByJobId $params = null): \DeepLSDK\DTOs\Voice\TranslateJobStatus\Response
    {
        return self::client()->resource(\DeepLSDK\Resources\V1\Jobs\Voice\Translate::class)->getByJobId($job_id, $params);
    }

}
