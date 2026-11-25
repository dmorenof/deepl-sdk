<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V2\Admin;

final class Analytics extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_date',
        'start_date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'end_date' => 'end_date',
            'group_by' => 'group_by',
            'start_date' => 'start_date',
        ],
        'header' => [],
    ];

    public string $end_date;
    public ?\DeepLSDK\Enums\V2\Admin\Analytics\Get\Query\GroupByEnum $group_by;
    public string $start_date;
}
