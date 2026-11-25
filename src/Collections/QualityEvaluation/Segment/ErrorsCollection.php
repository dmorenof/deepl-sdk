<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\QualityEvaluation\Segment;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\QualityEvaluation\Issue> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\QualityEvaluation\Issue::class;
}
