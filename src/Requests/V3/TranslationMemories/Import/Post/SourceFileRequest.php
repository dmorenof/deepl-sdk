<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\TranslationMemories\Import\Post;

final class SourceFileRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content_length',
        'file_name',
    ];

    protected const array VALIDATION = [
        'content_length' => [
            'minimum' => 1,
        ],
        'content_type' => [
            'maxLength' => 127,
        ],
        'file_name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * The size of the file in bytes. Must be greater than 0 and at most 1 GB. An oversize
     * value is rejected with `400 Bad Request`.
     * Example: 1024
     * Format: int64
     */
    public int $content_length {
        set {
            $this->assigning('content_length', $value);
            $this->content_length = $value;
        }
    }
    /**
     * The MIME type of the file. Defaults to `application/xml`, which is correct for TMX.
     * TMX is currently the only supported import format. At most 127 characters.
     * Example: "application/xml"
     */
    public string $content_type {
        set {
            $this->assigning('content_type', $value);
            $this->content_type = $value;
        }
    }
    /**
     * The name of the TMX file you intend to upload, including its extension. At most 100
     * characters.
     * Example: "legal.tmx"
     */
    public string $file_name {
        set {
            $this->assigning('file_name', $value);
            $this->file_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content_length' => is_int($value) ? $this->content_length = $value : parent::assignMember($name, $value),
            'content_type' => is_string($value) ? $this->content_type = $value : parent::assignMember($name, $value),
            'file_name' => is_string($value) ? $this->file_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
