<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V1\Jobs\Voice;

final class Translate extends \DeepLSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/jobs/voice/translate',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Voice\\TranslateCreateJob\\Response',
        'querySerialization' => [
            'include' => 'multi',
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\DTOs\\Voice\\TranslateCreateJob\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a voice translation job
     *
     * Creates an async voice translation job. The response includes an upload URL for the source audio file.
     */
    public function post(\DeepLSDK\PostParams\V1\Jobs\Voice\Translate $params): \DeepLSDK\DTOs\Voice\TranslateCreateJob\Response
    {
        /** @var \DeepLSDK\DTOs\Voice\TranslateCreateJob\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_JOB_ID = [
        'method' => 'GET',
        'path' => '/v1/jobs/voice/translate/{job_id}',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            401 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            401 => [
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
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\Voice\\TranslateJobStatus\\Response',
        'querySerialization' => [
            'include' => 'multi',
        ],
    ];

    /**
     * Get voice translation job status
     *
     * Returns the current status of a voice translation job, including per-target result statuses.
     *
     * When a target's status is `complete`, the response includes a `download_url` and `signature` for that target. Results are returned in the same order as the targets in the create request.
     */
    public function getByJobId(string $job_id, ?\DeepLSDK\GetParams\V1\Jobs\Voice\Translate\ByJobId $params = null): \DeepLSDK\DTOs\Voice\TranslateJobStatus\Response
    {
        /** @var \DeepLSDK\DTOs\Voice\TranslateJobStatus\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_JOB_ID), path: ['job_id' => $job_id], parameters: $params);
        return $result;
    }
}
