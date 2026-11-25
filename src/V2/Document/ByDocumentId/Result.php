<?php

declare(strict_types=1);

namespace DeepLSDK\V2\Document\ByDocumentId;

final class Result extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** POST /v2/document/{document_id}/result [operationId: downloadDocument] */
    /**
     * Download Translated Document
     *
     * Download a translated document. The document must have a status of `done`. Each
     * document can be downloaded only once: after a successful download DeepL deletes the
     * file and invalidates the `document_id`.
     */
    public static function post(string $document_id, \DeepLSDK\DTOs\DocumentKey $payload): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\DeepLSDK\Resources\V2\Document\ByDocumentId\Result::class)->post($document_id, $payload);
    }
}
