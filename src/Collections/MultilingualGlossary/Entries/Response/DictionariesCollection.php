<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\MultilingualGlossary\Entries\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\MultilingualGlossary\EntriesInformation> */
final class DictionariesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\MultilingualGlossary\EntriesInformation::class;
}
