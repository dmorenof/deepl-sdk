<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\TranslationMemories\Import;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'expires_at',
    'job_id',
    'upload_url',
];

    /**
     * The time the `upload_url` stops accepting uploads, in the ISO 8601-1:2019 format. After
     * this time, create a new import job.
     * Example: "2026-08-06T15:34:25.223Z"
     * Format: date-time
     */
    public string $expires_at;
    /**
     * The identifier of the import job. Use it to poll the job's status.
     * Example: "0f8b6c1e-4d2a-4c77-9a3e-1b5d8c9e2f40"
     * Format: uuid
     */
    public string $job_id;
    /**
     * A signed URL to `PUT` the TMX file to. Do not send your `Authorization` header with the
     * upload request.
     * Example: "https://assets.deepl.com/upload/0f8b6c1e-4d2a-4c77-9a3e-1b5d8c9e2f40"
     * Format: uri
     */
    public string $upload_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'upload_url' => is_string($value) ? $this->upload_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
