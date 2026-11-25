<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\AdminUsageReportData;

enum GroupByEnum: string
{
    case Key = 'key';
    case KeyAndDay = 'key_and_day';
}
