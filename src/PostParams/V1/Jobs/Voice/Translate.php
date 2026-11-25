<?php

declare(strict_types=1);

namespace DeepLSDK\PostParams\V1\Jobs\Voice;

final class Translate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
];
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

    public const bool OPERATION_BODY = true;

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
    public \DeepLSDK\DTOs\Voice\TranslateCreateJob\Request $body;
}
