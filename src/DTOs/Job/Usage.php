<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Job;

final class Usage extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Total storage used by this job in bytes, including source and output files.
     * Format: int64
     */
    public int $storage_used;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'storage_used' => is_int($value) ? $this->storage_used = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
