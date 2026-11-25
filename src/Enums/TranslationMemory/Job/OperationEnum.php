<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\TranslationMemory\Job;

enum OperationEnum: string
{
    case Export = 'export';
    case Import = 'import';
}
