<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * The response for admin usage statistics.
 */
final class AdminUsageReport extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\DTOs\AdminUsageReportData $usage_report;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'usage_report' => $value instanceof \stdClass ? $this->usage_report = new \DeepLSDK\DTOs\AdminUsageReportData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
