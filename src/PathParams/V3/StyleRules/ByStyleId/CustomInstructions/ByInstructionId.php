<?php

declare(strict_types=1);

namespace DeepLSDK\PathParams\V3\StyleRules\ByStyleId\CustomInstructions;

final class ByInstructionId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'instruction_id',
        'style_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'instruction_id' => 'instruction_id',
            'style_id' => 'style_id',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $instruction_id;
    public string $style_id;
}
