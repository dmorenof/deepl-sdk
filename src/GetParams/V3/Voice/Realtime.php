<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V3\Voice;

final class Realtime extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'token',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'token' => 'token',
    ],
    'header' => [],
];

    public string $token;
}
