<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Job\SourceFile;

/**
 * Metadata about the source audio file to be uploaded.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content_length',
        'content_type',
        'name',
    ];

    protected const array VALIDATION = [
        'content_length' => [
            'minimum' => 1,
            'maximum' => 1073741824,
        ],
        'name' => [
            'minLength' => 1,
        ],
    ];

    /**
     * The size of the source audio file in bytes. Maximum 1 GB (1,073,741,824 bytes).
     * Example: 15728640
     * Format: int64
     */
    public int $content_length {
        set {
            $this->assigning('content_length', $value);
            $this->content_length = $value;
        }
    }
    public \DeepLSDK\Enums\Voice\TranslateJobSourceContentType $content_type;
    /**
     * The file name of the source audio file.
     * Example: "podcast-episode-42.mp3"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content_length' => is_int($value) ? $this->content_length = $value : parent::assignMember($name, $value),
            'content_type' => is_string($value) ? $this->content_type = \DeepLSDK\Enums\Voice\TranslateJobSourceContentType::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
