<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\TranslateCreateJob;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source_file',
        'targets',
    ];

    protected const array VALIDATION = [
        'targets' => [
            'minItems' => 1,
        ],
    ];

    public \DeepLSDK\DTOs\Voice\TranslateJobParameters\Request $parameters;
    public \DeepLSDK\DTOs\Job\SourceFile\Request $source_file;
    /**
     * One or more translation targets. Each target produces a separate result.
     */
    public \DeepLSDK\Collections\Voice\TranslateCreateJob\Request\TargetsCollection $targets {
        set {
            $this->assigning('targets', $value);
            $this->targets = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameters' => $value instanceof \stdClass ? $this->parameters = new \DeepLSDK\DTOs\Voice\TranslateJobParameters\Request($value) : parent::assignMember($name, $value),
            'source_file' => $value instanceof \stdClass ? $this->source_file = new \DeepLSDK\DTOs\Job\SourceFile\Request($value) : parent::assignMember($name, $value),
            'targets' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->targets = new \DeepLSDK\Collections\Voice\TranslateCreateJob\Request\TargetsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Voice\TranslateJobTarget\Request::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
