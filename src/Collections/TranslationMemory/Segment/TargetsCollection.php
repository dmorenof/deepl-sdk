<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\TranslationMemory\Segment;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\TranslationMemory\TargetSegment> */
final class TargetsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\TranslationMemory\TargetSegment::class;
}
