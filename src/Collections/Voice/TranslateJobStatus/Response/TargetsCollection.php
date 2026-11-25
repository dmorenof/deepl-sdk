<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\Voice\TranslateJobStatus\Response;

final class TargetsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\Voice\TranslateJobTarget\Response::class;
}
