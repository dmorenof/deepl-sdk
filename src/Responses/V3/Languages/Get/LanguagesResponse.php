<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\Languages\Get;

final class LanguagesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'features',
    'lang',
    'name',
    'status',
    'usable_as_source',
    'usable_as_target',
];

    /**
     * Features supported for this language with the specified resource. Always present;
     * empty object if no optional features are supported. Each key is a feature name;
     * the value is an object with at least a `status` field. Consult `GET /v3/languages/resources`
     * to determine whether a feature must be present on the source language, target language,
     * or both for a given resource.
     * Example: {"formality":{"status":"stable"},"tag_handling":{"status":"stable"},"glossary":{"status":"stable"}}
     */
    public \DeepLSDK\Responses\V3\Languages\Get\ResponseItem\FeaturesMapResponse $features;
    /**
     * The language code (BCP 47).
     * Example: "de"
     */
    public string $lang;
    /**
     * Name of the language in English.
     * Example: "German"
     */
    public string $name;
    /**
     * Availability status of this language.
     * Example: "stable"
     */
    public \DeepLSDK\Enums\V3\Languages\Get\ResponseItem\ResponseItemStatusEnum $status;
    /**
     * Whether this language can be used as a source language with the specified resource.
     */
    public bool $usable_as_source;
    /**
     * Whether this language can be used as a target language with the specified resource.
     */
    public bool $usable_as_target;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lang' => is_string($value) ? $this->lang = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \DeepLSDK\Enums\V3\Languages\Get\ResponseItem\ResponseItemStatusEnum::from($value) : parent::assignMember($name, $value),
            'usable_as_source' => is_bool($value) ? $this->usable_as_source = $value : parent::assignMember($name, $value),
            'usable_as_target' => is_bool($value) ? $this->usable_as_target = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
