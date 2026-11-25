<?php

declare(strict_types=1);

namespace DeepLSDK\Enums;

enum ResultStatus: string
{
    case Complete = 'complete';
    case Downloaded = 'downloaded';
    case Failed = 'failed';
    case Pending = 'pending';
    case Processing = 'processing';
    case Uploaded = 'uploaded';
}
