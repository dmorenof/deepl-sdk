<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\CustomTag;

/**
 * The response for admin custom tag usage statistics.
 */
final class UsageReport extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\DTOs\CustomTag\UsageReportData $custom_tag_usage_report;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_tag_usage_report' => $value instanceof \stdClass ? $this->custom_tag_usage_report = new \DeepLSDK\DTOs\CustomTag\UsageReportData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
