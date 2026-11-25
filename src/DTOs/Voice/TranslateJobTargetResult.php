<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice;

/**
 * The processing result for a single translation target.
 */
final class TranslateJobTargetResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'status',
];

    /**
     * The URL to download the translated result via `GET`.
     * Requires the `Authorization: DeepL-Signature {signature}` header.
     * Only present when `status` is `complete`.
     * See [Download Result](/api-reference/jobs-voice-translate#download-result) for details.
     * Format: uri
     */
    public string $download_url;
    /**
     * Details about the processing failure. Only present when `status` is `failed`.
     */
    public \DeepLSDK\DTOs\Voice\TranslateJobTargetResult\ErrorDTO $error;
    /**
     * A short-lived token used to authorize the result download. Only present when `status` is `complete`.
     */
    public string $signature;
    /**
     * A pre-signed download URL that does not require an authorization header. Only present when `status` is `complete` and `?include=signed_url` is specified.
     * Format: uri
     */
    public string $signed_download_url;
    public \DeepLSDK\Enums\ResultStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'download_url' => is_string($value) ? $this->download_url = $value : parent::assignMember($name, $value),
            'signature' => is_string($value) ? $this->signature = $value : parent::assignMember($name, $value),
            'signed_download_url' => is_string($value) ? $this->signed_download_url = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\ResultStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
