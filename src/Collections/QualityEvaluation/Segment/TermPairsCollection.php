<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\QualityEvaluation\Segment;

final class TermPairsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\QualityEvaluation\AppliedGlossaryTermPair::class;
}
