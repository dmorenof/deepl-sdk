<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\TranslationMemory\JobResult;

/**
 * Extra context for states that need you to act. Present only when there is something to do.
 */
final class StatusMetadataDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * What the job is waiting for.
     * Example: "Waiting for upload"
     */
    public string $required_action;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'required_action' => is_string($value) ? $this->required_action = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
