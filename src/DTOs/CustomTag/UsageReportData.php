<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\CustomTag;

/**
 * Contains the detailed custom tag usage statistics for the specified date range.
 */
final class UsageReportData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The aggregation method used.
     * Example: "period"
     */
    public \DeepLSDK\Enums\CustomTag\UsageReportData\AggregateByEnum $aggregate_by;
    /**
     * End date of the usage report period.
     * Example: "2026-05-05T00:00:00"
     * Format: date-time
     */
    public string $end_date;
    /**
     * Cursor for the next page of results. Null if there are no further pages.
     * Example: 2
     */
    public ?int $next_page;
    /**
     * Start date of the usage report period.
     * Example: "2026-05-03T00:00:00"
     * Format: date-time
     */
    public string $start_date;
    /**
     * List of custom tag usage entries.
     */
    public \DeepLSDK\Collections\CustomTag\UsageReportData\UsageCollection $usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aggregate_by' => is_string($value) ? $this->aggregate_by = \DeepLSDK\Enums\CustomTag\UsageReportData\AggregateByEnum::from($value) : parent::assignMember($name, $value),
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'next_page' => $value === null || is_int($value) ? $this->next_page = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'usage' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->usage = new \DeepLSDK\Collections\CustomTag\UsageReportData\UsageCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\CustomTag\UsageItem::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
