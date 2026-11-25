<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V2\Admin\Analytics\Get\Query;

enum GroupByEnum: string
{
    case Key = 'key';
    case KeyAndDay = 'key_and_day';
}
