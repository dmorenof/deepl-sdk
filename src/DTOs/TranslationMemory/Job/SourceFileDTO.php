<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory\Job;

/**
 * The file declared when the import job was created. Omitted for export jobs.
 */
final class SourceFileDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The size in bytes declared for the uploaded file.
     * Example: 1024
     * Format: int64
     */
    public int $content_length;
    /**
     * The MIME type declared for the uploaded file.
     * Example: "application/xml"
     */
    public string $content_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content_length' => is_int($value) ? $this->content_length = $value : parent::assignMember($name, $value),
            'content_type' => is_string($value) ? $this->content_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
