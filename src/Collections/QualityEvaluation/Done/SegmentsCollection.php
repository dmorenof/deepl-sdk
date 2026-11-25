<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\QualityEvaluation\Done;

final class SegmentsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\QualityEvaluation\Segment::class;
}
