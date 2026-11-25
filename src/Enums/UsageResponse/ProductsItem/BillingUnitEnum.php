<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\UsageResponse\ProductsItem;

enum BillingUnitEnum: string
{
    case Characters = 'characters';
    case Minutes = 'minutes';
}
