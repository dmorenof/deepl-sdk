<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V2\Glossaries\ByGlossaryId;

final class Entries extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'Accept' => 'Accept',
    ],
];

    public ?string $Accept;
}
