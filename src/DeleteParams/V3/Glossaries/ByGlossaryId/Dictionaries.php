<?php

declare(strict_types=1);

namespace DeepLSDK\DeleteParams\V3\Glossaries\ByGlossaryId;

final class Dictionaries extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'source_lang',
    'target_lang',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'source_lang' => 'source_lang',
        'target_lang' => 'target_lang',
    ],
    'header' => [],
];

    public \DeepLSDK\Enums\Glossary\SourceLanguage $source_lang;
    public \DeepLSDK\Enums\MultilingualGlossary\TargetLanguage $target_lang;
}
