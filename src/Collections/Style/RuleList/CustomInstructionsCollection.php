<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\Style\RuleList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\CustomInstruction> */
final class CustomInstructionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\CustomInstruction::class;
}
