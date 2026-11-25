<?php

declare(strict_types=1);

namespace DeepLSDK\V3\StyleRules\ByStyleId;

final class CustomInstructions extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v3/style_rules/{style_id}/custom_instructions [operationId: createCustomInstruction] */
    /**
     * Create a custom instruction
     *
     * Add a custom instruction to a style rule list to express a style preference that the
     * predefined rules do not cover. Instructions apply to text in the given source language.
     */
    public static function post(string $style_id, \DeepLSDK\Requests\V3\StyleRules\ByStyleId\CustomInstructions\Post $payload): \DeepLSDK\DTOs\CustomInstruction
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules\ByStyleId\CustomInstructions::class)->post($style_id, $payload);
    }

    /** DELETE /v3/style_rules/{style_id}/custom_instructions/{instruction_id} [operationId: deleteCustomInstruction] */
    /**
     * Delete a custom instruction
     *
     * Delete a custom instruction from a style rule list. The rest of the list is unchanged.
     */
    public static function deleteByInstructionId(\DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId $identifier): void
    {
        self::client()->resource(\DeepLSDK\Resources\V3\StyleRules\ByStyleId\CustomInstructions::class)->deleteByInstructionId($identifier);
    }

    /** GET /v3/style_rules/{style_id}/custom_instructions/{instruction_id} [operationId: getCustomInstruction] */
    /**
     * Get a custom instruction
     *
     * Retrieve a single custom instruction from a style rule list.
     */
    public static function getByInstructionId(\DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId $identifier): \DeepLSDK\DTOs\CustomInstruction
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules\ByStyleId\CustomInstructions::class)->getByInstructionId($identifier);
    }

    /** PUT /v3/style_rules/{style_id}/custom_instructions/{instruction_id} [operationId: updateCustomInstruction] */
    /**
     * Replace a custom instruction
     *
     * Replace a custom instruction. Send every field you want to keep, because omitted
     * fields are overwritten.
     */
    public static function putByInstructionId(\DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId $identifier, \DeepLSDK\Requests\V3\StyleRules\ByStyleId\CustomInstructions\ByInstructionId\Put $payload): \DeepLSDK\DTOs\CustomInstruction
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\StyleRules\ByStyleId\CustomInstructions::class)->putByInstructionId($identifier, $payload);
    }

}
