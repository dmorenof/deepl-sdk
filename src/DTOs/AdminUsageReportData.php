<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * Contains the detailed usage statistics for the specified date range.
 */
final class AdminUsageReportData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * End date of the usage report period.
     * Example: "2025-10-01T00:00:00"
     * Format: date-time
     */
    public string $end_date;
    /**
     * The grouping method used, if any.
     * Example: "key_and_day"
     */
    public \DeepLSDK\Enums\AdminUsageReportData\GroupByEnum $group_by;
    /**
     * Usage statistics grouped by key and day. Present when group_by='key_and_day'.
     */
    public \DeepLSDK\Collections\AdminUsageReportData\DayUsagesCollection $key_and_day_usages;
    /**
     * Usage statistics grouped by key. Present when group_by='key'.
     */
    public \DeepLSDK\Collections\AdminUsageReportData\KeyUsagesCollection $key_usages;
    /**
     * Start date of the usage report period.
     * Example: "2025-09-29T00:00:00"
     * Format: date-time
     */
    public string $start_date;
    public \DeepLSDK\DTOs\UsageBreakdown $total_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'group_by' => is_string($value) ? $this->group_by = \DeepLSDK\Enums\AdminUsageReportData\GroupByEnum::from($value) : parent::assignMember($name, $value),
            'key_and_day_usages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->key_and_day_usages = new \DeepLSDK\Collections\AdminUsageReportData\DayUsagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\KeyAndDayUsageItem::class)) : parent::assignMember($name, $value),
            'key_usages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->key_usages = new \DeepLSDK\Collections\AdminUsageReportData\KeyUsagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\KeyUsageItem::class)) : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'total_usage' => $value instanceof \stdClass ? $this->total_usage = new \DeepLSDK\DTOs\UsageBreakdown($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
