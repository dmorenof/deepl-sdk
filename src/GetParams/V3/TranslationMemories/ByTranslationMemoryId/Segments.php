<?php

declare(strict_types=1);

namespace DeepLSDK\GetParams\V3\TranslationMemories\ByTranslationMemoryId;

final class Segments extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'filter_case_sensitive' => 'filter_case_sensitive',
            'filter_text' => 'filter_text',
            'page_cursor' => 'page_cursor',
            'page_size' => 'page_size',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'filter_text' => [
            'minLength' => 2,
        ],
        'page_size' => [
            'minimum' => 1,
            'maximum' => 100,
        ],
    ];

    public ?bool $filter_case_sensitive;
    public ?string $filter_text {
        set {
            $this->assigning('filter_text', $value);
            $this->filter_text = $value;
        }
    }
    public ?string $page_cursor;
    public ?int $page_size {
        set {
            $this->assigning('page_size', $value);
            $this->page_size = $value;
        }
    }
}
