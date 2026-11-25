<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2;

final class Document extends \DeepLSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v2/document',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            504 => null,
            529 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            413 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Document\\DocumentStatus500Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Document\\DocumentStatus504Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V2\\Document\\Post',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'custom_instructions' => [
                'contentType' => 'text/plain',
            ],
            'enable_beta_languages' => [
                'contentType' => 'text/plain',
            ],
            'enable_quality_evaluation' => [
                'contentType' => 'text/plain',
            ],
            'enable_watermark' => [
                'contentType' => 'text/plain',
            ],
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
            'filename' => [
                'contentType' => 'text/plain',
            ],
            'formality' => [
                'contentType' => 'text/plain',
            ],
            'glossary_id' => [
                'contentType' => 'text/plain',
            ],
            'glossary_ids' => [
                'contentType' => 'text/plain',
            ],
            'input_conversion_options' => [
                'contentType' => 'text/plain',
            ],
            'output_format' => [
                'contentType' => 'text/plain',
            ],
            'source_lang' => [
                'contentType' => 'text/plain',
            ],
            'style_id' => [
                'contentType' => 'text/plain',
            ],
            'style_profile_id' => [
                'contentType' => 'text/plain',
            ],
            'target_lang' => [
                'contentType' => 'text/plain',
            ],
            'translation_memory_id' => [
                'contentType' => 'text/plain',
            ],
            'translation_memory_threshold' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Upload and Translate a Document
     *
     * Upload a document for translation and receive a `document_id` and `document_key`. Use
     * them to poll the document status and download the translated file. Translation is
     * asynchronous: the upload response confirms the request, not a finished translation.
     */
    public function post(\DeepLSDK\Requests\V2\Document\Post $payload): \DeepLSDK\Responses\V2\Document\Post
    {
        /** @var \DeepLSDK\Responses\V2\Document\Post $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array POST_BY_DOCUMENT_ID = [
        'method' => 'POST',
        'path' => '/v2/document/{document_id}',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            504 => null,
            529 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            413 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Document\\ByDocumentId\\ByDocumentIdStatus500Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Document\\ByDocumentId\\ByDocumentIdStatus504Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Responses\\V2\\Document\\ByDocumentId\\Post',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\DeepLSDK\\DTOs\\DocumentKey',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Check Document Status
     *
     * Retrieve the translation status of an uploaded document. Poll this endpoint until the
     * status is `done`, then download the result. The response includes an estimated
     * remaining time while the document is still translating.
     */
    public function postByDocumentId(string $document_id, \DeepLSDK\DTOs\DocumentKey $payload): \DeepLSDK\Responses\V2\Document\ByDocumentId\Post
    {
        /** @var \DeepLSDK\Responses\V2\Document\ByDocumentId\Post $result */
        $result = $this->executeBody(self::operation(self::POST_BY_DOCUMENT_ID), $payload, path: ['document_id' => $document_id]);
        return $result;
    }

}
