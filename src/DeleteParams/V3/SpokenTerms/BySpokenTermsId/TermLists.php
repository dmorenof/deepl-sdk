<?php

declare(strict_types=1);

namespace DeepLSDK\DeleteParams\V3\SpokenTerms\BySpokenTermsId;

final class TermLists extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'lang',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'lang' => 'lang',
    ],
    'header' => [],
];

    public string $lang;
}
