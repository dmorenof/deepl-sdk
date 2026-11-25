<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V2;

final class Languages extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'type' => 'type',
        ],
        'header' => [],
    ];

    public ?\DeepLSDK\Enums\V2\Languages\Get\Query\QueryTypeEnum $type;
}
