<?php

declare(strict_types=1);

namespace DeepLSDK\Collections\UsageResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\DeepLSDK\DTOs\UsageResponse\ProductsDTO> */
final class ProductsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \DeepLSDK\DTOs\UsageResponse\ProductsDTO::class;
}
