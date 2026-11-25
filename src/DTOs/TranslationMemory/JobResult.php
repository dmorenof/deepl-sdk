<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory;

/**
 * The status of a translation memory job and, once it finishes, its output.
 */
final class JobResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * A short-lived URL to download the exported TMX file from. Present on completed export jobs
     * only. Download the file rather than storing this URL.
     * Example: "https://assets.deepl.com/download/7c2e5a91-3b8d-4f16-8e0a-6d4c2b7f9a13"
     * Format: uri
     */
    public string $download_url;
    /**
     * Why the job failed. Present only when `status` is `failed`.
     */
    public \DeepLSDK\DTOs\TranslationMemory\JobResult\ErrorDTO $error;
    /**
     * The time `download_url` stops working, in the ISO 8601-1:2019 format. Present on completed
     * export jobs only.
     * Example: "2026-08-06T16:05:02.771Z"
     * Format: date-time
     */
    public string $expires_at;
    /**
     * How many segments in the uploaded file were not imported, for example because they were
     * malformed or duplicated an existing segment. Present on completed import jobs only. A non-zero
     * value does not mean the import failed.
     * Example: 12
     * Format: int64
     */
    public int $skipped_segment_count;
    /**
     * The job's current state:
     *  * `awaiting_input` - the job exists but the file has not been uploaded yet (import only)
     *  * `processing` - the file was received and is being processed
     *  * `completed` - the job finished successfully
     *  * `failed` - the job did not finish; see `error`
     *  * `expired` - the job is too old to act on; create a new one
     * Example: "completed"
     */
    public \DeepLSDK\Enums\TranslationMemory\JobResult\StatusEnum $status;
    /**
     * Extra context for states that need you to act. Present only when there is something to do.
     */
    public \DeepLSDK\DTOs\TranslationMemory\JobResult\StatusMetadataDTO $status_metadata;
    /**
     * A unique ID assigned to a translation memory.
     * Format: uuid
     */
    public string $translation_memory_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'download_url' => is_string($value) ? $this->download_url = $value : parent::assignMember($name, $value),
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'skipped_segment_count' => is_int($value) ? $this->skipped_segment_count = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\TranslationMemory\JobResult\StatusEnum::from($value) : parent::assignMember($name, $value),
            'translation_memory_id' => is_string($value) ? $this->translation_memory_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
