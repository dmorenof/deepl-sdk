<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class DocumentKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'document_key',
];

    /**
     * The document encryption key that was sent to the client when the document was uploaded to the API.
     * Example: "0CB0054F1C132C1625B392EADDA41CB754A742822F6877173029A6C487E7F60A"
     */
    public string $document_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document_key' => is_string($value) ? $this->document_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
