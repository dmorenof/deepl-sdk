<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V3;

final class Languages extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'resource',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'include' => 'include_',
            'resource' => 'resource',
        ],
        'header' => [],
    ];

    protected const array PROPERTY_MAP = [
        'include' => 'include_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'include_' => 'include',
    ];

    protected const array VALIDATION = [
        'include_' => [
            'items' => [
                'type' => 'string',
                'rules' => [
                    'enum' => [
                        'beta',
                        'external',
                    ],
                ],
            ],
        ],
    ];

    /** @var list<string>|null */
    public ?array $include_;
    public \DeepLSDK\Enums\V3\Languages\Get\Query\QueryResourceEnum $resource;
}
