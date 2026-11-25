<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

final class PutSpokenTermsListParameters extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'entries',
        'lang',
    ];

    protected const array VALIDATION = [
        'entries' => [
            'maxLength' => 300,
        ],
    ];

    /**
     * Newline-separated list of terms, one term per line. Maximum 300 characters total.
     *
     * Terms are case-sensitive. Each term must be non-empty, must not contain C0 or C1 control characters (such as tabs or newlines within a term), and must not have leading or trailing whitespace. Duplicate terms within a list are not allowed (comparison is case-sensitive).
     *
     * Example: "DeepL\nAPI\nwebhook\nintegration"
     */
    public string $entries {
        set {
            $this->assigning('entries', $value);
            $this->entries = $value;
        }
    }
    /**
     * Language code (ISO 639-1) for this term list.
     * Example: "en"
     */
    public string $lang;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entries' => is_string($value) ? $this->entries = $value : parent::assignMember($name, $value),
            'lang' => is_string($value) ? $this->lang = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
