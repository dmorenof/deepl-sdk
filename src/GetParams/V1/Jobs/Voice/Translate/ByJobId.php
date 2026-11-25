<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V1\Jobs\Voice\Translate;

final class ByJobId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'include' => 'include_',
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
                    'signed_url',
                ],
            ],
        ],
    ],
];

    /** @var list<string>|null */
    public ?array $include_;
}
