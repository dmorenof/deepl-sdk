<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V3\StyleRules\ByStyleId;

final class CustomInstructions extends \DeepLSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v3/style_rules/{style_id}/custom_instructions',
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
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
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
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\CustomInstructionsStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\CustomInstructionsStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\CustomInstruction',
        'responseHeaders' => [
            201 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a custom instruction
     *
     * Add a custom instruction to a style rule list to express a style preference that the
     * predefined rules do not cover. Instructions apply to text in the given source language.
     */
    public function post(string $style_id, \DeepLSDK\Requests\V3\StyleRules\ByStyleId\CustomInstructions\Post $payload): \DeepLSDK\DTOs\CustomInstruction
    {
        /** @var \DeepLSDK\DTOs\CustomInstruction $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['style_id' => $style_id]);
        return $result;
    }

    private const array DELETE_BY_INSTRUCTION_ID = [
        'method' => 'DELETE',
        'path' => '/v3/style_rules/{style_id}/custom_instructions/{instruction_id}',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'success' => [
            204,
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\ByInstructionIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\ByInstructionIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            204 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Delete a custom instruction
     *
     * Delete a custom instruction from a style rule list. The rest of the list is unchanged.
     */
    public function deleteByInstructionId(\DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_INSTRUCTION_ID), path: $identifier);
        return;
    }

    private const array GET_BY_INSTRUCTION_ID = [
        'method' => 'GET',
        'path' => '/v3/style_rules/{style_id}/custom_instructions/{instruction_id}',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\OneOfGetStatus500\\ByInstructionIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\OneOfGetStatus503\\ByInstructionIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\CustomInstruction',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Get a custom instruction
     *
     * Retrieve a single custom instruction from a style rule list.
     */
    public function getByInstructionId(\DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId $identifier): \DeepLSDK\DTOs\CustomInstruction
    {
        /** @var \DeepLSDK\DTOs\CustomInstruction $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INSTRUCTION_ID), path: $identifier);
        return $result;
    }

    private const array PUT_BY_INSTRUCTION_ID = [
        'method' => 'PUT',
        'path' => '/v3/style_rules/{style_id}/custom_instructions/{instruction_id}',
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
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\OneOfPutStatus500\\ByInstructionIdStatus500Response',
                'schemaNullable' => false,
            ],
            503 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\OneOfPutStatus503\\ByInstructionIdStatus503Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\DTOs\\CustomInstruction',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\Requests\\V3\\StyleRules\\ByStyleId\\CustomInstructions\\ByInstructionId\\Put',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Replace a custom instruction
     *
     * Replace a custom instruction. Send every field you want to keep, because omitted
     * fields are overwritten.
     */
    public function putByInstructionId(\DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId $identifier, \DeepLSDK\Requests\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId\Put $payload): \DeepLSDK\DTOs\CustomInstruction
    {
        /** @var \DeepLSDK\DTOs\CustomInstruction $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_INSTRUCTION_ID), $payload, path: $identifier);
        return $result;
    }

}
