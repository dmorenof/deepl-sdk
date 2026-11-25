<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\TranslationMemory\Job;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\TranslationMemory\JobResult> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\TranslationMemory\JobResult::class;
}
