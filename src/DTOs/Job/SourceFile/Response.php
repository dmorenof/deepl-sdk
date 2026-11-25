<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Job\SourceFile;

/**
 * Metadata about the uploaded source audio file.
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content_length',
    'content_type',
    'name',
];

    /**
     * The size of the source audio file in bytes.
     * Format: int64
     */
    public int $content_length;
    /**
     * The MIME type of the source audio file.
     */
    public string $content_type;
    /**
     * The file name of the source audio file.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content_length' => is_int($value) ? $this->content_length = $value : parent::assignMember($name, $value),
            'content_type' => is_string($value) ? $this->content_type = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
