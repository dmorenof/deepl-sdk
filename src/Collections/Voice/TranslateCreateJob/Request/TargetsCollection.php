<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\Voice\TranslateCreateJob\Request;

final class TargetsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\Voice\TranslateJobTarget\Request::class;
}
