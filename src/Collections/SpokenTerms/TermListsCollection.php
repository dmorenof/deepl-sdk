<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\SpokenTerms;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\SpokenTermsList> */
final class TermListsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\SpokenTermsList::class;
}
