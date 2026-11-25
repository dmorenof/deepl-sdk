<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\AdminUsageReportData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\KeyAndDayUsageItem> */
final class DayUsagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\KeyAndDayUsageItem::class;
}
