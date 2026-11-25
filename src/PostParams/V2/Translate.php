<?php

declare(strict_types=1);

namespace DeepLSDK\PostParams\V2;

final class Translate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'X-DeepL-Reporting-Tag' => 'XDeepLReportingTag',
    ],
];

    protected const array PROPERTY_MAP = [
    'X-DeepL-Reporting-Tag' => 'XDeepLReportingTag',
];
    protected const array WIRE_PROPERTY_MAP = [
    'XDeepLReportingTag' => 'X-DeepL-Reporting-Tag',
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'XDeepLReportingTag' => [
        'maxLength' => 100,
    ],
];

    public ?string $XDeepLReportingTag {
        set {
            $this->assigning('XDeepLReportingTag', $value);
            $this->XDeepLReportingTag = $value;
        }
    }
    public \DeepLSDK\Requests\V2\Translate\Post $body;
}
