<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V2\Admin\Analytics\CustomTags\Get\Query;

enum AggregateByEnum: string
{
    case Day = 'day';
    case Period = 'period';
}
