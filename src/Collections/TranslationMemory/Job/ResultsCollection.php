<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\TranslationMemory\Job;

final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\TranslationMemory\JobResult::class;
}
