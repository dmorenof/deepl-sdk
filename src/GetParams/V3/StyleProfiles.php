<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V3;

final class StyleProfiles extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page' => 'page',
            'page_size' => 'page_size',
        ],
        'header' => [],
    ];

    public ?int $page;
    public ?int $page_size;
}
