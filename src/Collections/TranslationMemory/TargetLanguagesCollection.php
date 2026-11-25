<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\TranslationMemory;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\Enums\TranslationMemory\TargetLanguage> */
final class TargetLanguagesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\Enums\TranslationMemory\TargetLanguage::class;
}
