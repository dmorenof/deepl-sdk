<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V3\Languages\Get\ResponseItem;

enum ResponseItemStatusEnum: string
{
    case Beta = 'beta';
    case EarlyAccess = 'early_access';
    case Stable = 'stable';
}
