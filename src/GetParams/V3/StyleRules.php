<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V3;

final class StyleRules extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'detailed' => 'detailed',
            'page' => 'page',
            'page_size' => 'page_size',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page_size' => [
            'minimum' => 1,
            'maximum' => 25,
        ],
    ];

    public ?bool $detailed;
    public ?int $page;
    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
}
