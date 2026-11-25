<?php

declare(strict_types=1);

namespace DeepLSDK\V2;

final class Document extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v2/document [operationId: translateDocument] */
    /**
     * Upload and Translate a Document
     *
     * Upload a document for translation and receive a `document_id` and `document_key`. Use
     * them to poll the document status and download the translated file. Translation is
     * asynchronous: the upload response confirms the request, not a finished translation.
     */
    public static function post(\DeepLSDK\Requests\V2\Document\Post $payload): \DeepLSDK\Responses\V2\Document\Post
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Document::class)->post($payload);
    }

    /** POST /v2/document/{document_id} [operationId: getDocumentStatus] */
    /**
     * Check Document Status
     *
     * Retrieve the translation status of an uploaded document. Poll this endpoint until the
     * status is `done`, then download the result. The response includes an estimated
     * remaining time while the document is still translating.
     */
    public static function postByDocumentId(string $document_id, \DeepLSDK\DTOs\DocumentKey $payload): \DeepLSDK\Responses\V2\Document\ByDocumentId\Post
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Document::class)->postByDocumentId($document_id, $payload);
    }
}
