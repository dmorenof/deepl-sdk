<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Document;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A unique ID assigned to the uploaded document and the translation process. Must be used when referring to this particular document in subsequent API requests.
     * Example: "04DE5AD98A02647D83285A36021911C6"
     */
    public string $document_id;
    /**
     * A unique key that is used to encrypt the uploaded document as well as the resulting translation on the server side. Must be provided with every subsequent API request regarding this particular document.
     * Example: "0CB0054F1C132C1625B392EADDA41CB754A742822F6877173029A6C487E7F60A"
     */
    public string $document_key;
    /**
     * (beta) A unique ID assigned to the quality evaluation. Returned only when the request set `enable_quality_evaluation=true`. Use it to retrieve the report from [`GET /v1/quality-evaluations/{job_id}`](/api-reference/quality-evaluations/poll).
     * Example: "04DE5AD98A02647D83285A36021911C6"
     */
    public string $quality_evaluation_job_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document_id' => is_string($value) ? $this->document_id = $value : parent::assignMember($name, $value),
            'document_key' => is_string($value) ? $this->document_key = $value : parent::assignMember($name, $value),
            'quality_evaluation_job_id' => is_string($value) ? $this->quality_evaluation_job_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
