<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\Errors\V3\TranslationMemories\ByTranslationMemoryId;

final class ByTranslationMemoryIdStatus503Response extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\DeepLSDK\DTOs\ErrorResponse::class, \DeepLSDK\DTOs\InfrastructureErrorResponse::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'ErrorResponse',
        ],
        [
            'kind' => 'reference',
            'ref' => 'InfrastructureErrorResponse',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'ErrorResponse' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                ],
                'message' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'message',
            ],
        ],
        'InfrastructureErrorResponse' => [
            'kind' => 'object',
            'properties' => [
                'error' => [
                    'kind' => 'object',
                    'properties' => [
                        'message' => [
                            'kind' => 'string',
                        ],
                    ],
                    'required' => [
                        'message',
                    ],
                ],
            ],
            'required' => [
                'error',
            ],
        ],
    ];
}
