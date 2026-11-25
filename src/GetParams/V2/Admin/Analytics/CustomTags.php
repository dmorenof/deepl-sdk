<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V2\Admin\Analytics;

final class CustomTags extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_date',
        'start_date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'aggregate_by' => 'aggregate_by',
            'end_date' => 'end_date',
            'page' => 'page',
            'start_date' => 'start_date',
        ],
        'header' => [],
    ];

    public ?\DeepLSDK\Enums\V2\Admin\Analytics\CustomTags\Get\Query\AggregateByEnum $aggregate_by;
    public string $end_date;
    public ?int $page;
    public string $start_date;
}
