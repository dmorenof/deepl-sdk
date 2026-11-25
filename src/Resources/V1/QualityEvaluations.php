<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V1;

final class QualityEvaluations extends \DeepLSDK\Client
{
    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v1/quality-evaluations/{job_id}',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            200,
            202,
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\QualityEvaluation\\ApiError',
            404 => '\\DeepLSDK\\DTOs\\QualityEvaluation\\ApiError',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\QualityEvaluation\\ApiError',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\QualityEvaluation\\ApiError',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\DeepLSDK\\Responses\\V1\\QualityEvaluations\\ByJobId\\GetStatus200\\ByJobIdGetStatus200Response',
                'schemaNullable' => false,
            ],
            202 => [
                'type' => '\\DeepLSDK\\DTOs\\QualityEvaluation\\Processing',
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            202 => [
                'Retry-After' => [
                    'type' => 'integer',
                ],
            ],
        ],
    ];

    /**
     * Poll for the evaluation result
     *
     * Returns the current state of a quality evaluation. While the evaluation is in progress the response carries only status information; once it completes, the response carries the full report.
     *
     * Evaluations are requested with `enable_quality_evaluation` on [`POST /v2/document`](/api-reference/document/upload-and-translate-a-document). There is no public endpoint for starting one.
     */
    public function getByJobId(string $job_id): \DeepLSDK\Responses\V1\QualityEvaluations\ByJobId\GetStatus200\ByJobIdGetStatus200Response|\DeepLSDK\DTOs\QualityEvaluation\Processing
    {
        /** @var \DeepLSDK\Responses\V1\QualityEvaluations\ByJobId\GetStatus200\ByJobIdGetStatus200Response|\DeepLSDK\DTOs\QualityEvaluation\Processing $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: ['job_id' => $job_id]);
        return $result;
    }

}
