<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Document\ByDocumentId;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'document_id',
        'status',
    ];

    /**
     * The number of characters billed to your account. The characters will only be billed after a successful download request.
     * Example: 1337
     */
    public int $billed_characters;
    /**
     * A unique ID assigned to the uploaded document and the requested translation process. The same ID that was used when requesting the translation status.
     * Example: "04DE5AD98A02647D83285A36021911C6"
     */
    public string $document_id;
    /**
     * A short description of the error, if available.
     * Note that the content is subject to change.
     * This parameter may be included if an error occurred during translation.
     * Example: "Only available if document status is error"
     */
    public string $error_message;
    /**
     * Estimated number of seconds until the translation is done.
     * This parameter is only included while `status` is `"translating"`.
     */
    public int $seconds_remaining;
    /**
     * A short description of the state the document translation process is currently in. Possible values are:
     *  * `queued` - the translation job is waiting in line to be processed
     *  * `translating` - the translation is currently ongoing
     *  * `done` - the translation is done and the translated document is ready for download
     *  * `error` - an irrecoverable error occurred while translating the document
     * Example: "done"
     */
    public \DeepLSDK\Enums\V2\Document\ByDocumentId\Post\ByDocumentIdStatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billed_characters' => is_int($value) ? $this->billed_characters = $value : parent::assignMember($name, $value),
            'document_id' => is_string($value) ? $this->document_id = $value : parent::assignMember($name, $value),
            'error_message' => is_string($value) ? $this->error_message = $value : parent::assignMember($name, $value),
            'seconds_remaining' => is_int($value) ? $this->seconds_remaining = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\V2\Document\ByDocumentId\Post\ByDocumentIdStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
