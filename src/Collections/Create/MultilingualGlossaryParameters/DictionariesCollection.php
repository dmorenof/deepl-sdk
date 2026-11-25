<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\Create\MultilingualGlossaryParameters;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\Glossary\Dictionary> */
final class DictionariesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\Glossary\Dictionary::class;
}
