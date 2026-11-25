<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\CustomTag\UsageReportData;

final class UsageCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\CustomTag\UsageItem::class;
}
