<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\TranslateCreateJob;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'job_id',
    'signature',
    'upload_url',
];

    /**
     * The unique identifier of the created job.
     * Format: uuid
     */
    public string $job_id;
    /**
     * A short-lived token used to authorize the file upload. Pass it via the `Authorization` header as `DeepL-Signature {signature}` when uploading to the `upload_url`.
     */
    public string $signature;
    /**
     * A pre-signed upload URL that does not require an authorization header. Only present when `?include=signed_url` is specified.
     * Format: uri
     */
    public string $signed_upload_url;
    /**
     * The URL to upload the source audio file to via `PUT` with `Content-Type: application/octet-stream`.
     * Requires the `Authorization: DeepL-Signature {signature}` header.
     * See [Upload File](/api-reference/jobs-voice-translate#upload-file) for details.
     * Format: uri
     */
    public string $upload_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'job_id' => is_string($value) ? $this->job_id = $value : parent::assignMember($name, $value),
            'signature' => is_string($value) ? $this->signature = $value : parent::assignMember($name, $value),
            'signed_upload_url' => is_string($value) ? $this->signed_upload_url = $value : parent::assignMember($name, $value),
            'upload_url' => is_string($value) ? $this->upload_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
