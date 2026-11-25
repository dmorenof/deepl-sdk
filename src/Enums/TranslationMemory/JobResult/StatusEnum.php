<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\TranslationMemory\JobResult;

enum StatusEnum: string
{
    case AwaitingInput = 'awaiting_input';
    case Completed = 'completed';
    case Expired = 'expired';
    case Failed = 'failed';
    case Processing = 'processing';
}
