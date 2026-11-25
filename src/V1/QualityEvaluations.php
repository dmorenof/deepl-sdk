<?php

declare(strict_types=1);

namespace DeepLSDK\V1;

final class QualityEvaluations extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v1/quality-evaluations/{job_id} [operationId: pollQualityEvaluation] */
    /**
     * Poll for the evaluation result
     *
     * Returns the current state of a quality evaluation. While the evaluation is in progress the response carries only status information; once it completes, the response carries the full report.
     *
     * Evaluations are requested with `enable_quality_evaluation` on [`POST /v2/document`](/api-reference/document/upload-and-translate-a-document). There is no public endpoint for starting one.
     */
    public static function getByJobId(string $job_id): \DeepLSDK\Responses\V1\QualityEvaluations\ByJobId\GetStatus200\ByJobIdGetStatus200Response|\DeepLSDK\DTOs\QualityEvaluation\Processing
    {
        return self::client()->resource(\DeepLSDK\Resources\V1\QualityEvaluations::class)->getByJobId($job_id);
    }
}
