<?php

declare(strict_types=1);

namespace DeepLSDK\Requests\V3\TranslationMemories\Import;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'source_file',
];

    public \DeepLSDK\Requests\V3\TranslationMemories\Import\Post\ImportParametersRequest $parameters;
    public \DeepLSDK\Requests\V3\TranslationMemories\Import\Post\SourceFileRequest $source_file;

}
