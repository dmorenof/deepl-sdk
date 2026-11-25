<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\Create\SpokenTermsParameters;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\SpokenTerms\ListInput> */
final class TermListsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\SpokenTerms\ListInput::class;
}
