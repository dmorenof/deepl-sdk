<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V2\Document\ByDocumentId\Post;

enum ByDocumentIdStatusEnum: string
{
    case Done = 'done';
    case Error = 'error';
    case Queued = 'queued';
    case Translating = 'translating';
}
