<?php

declare(strict_types=1);

namespace DeepLSDK\Enums;

enum Formality: string
{
    case Default_ = 'default';
    case Less = 'less';
    case More = 'more';
    case PreferLess = 'prefer_less';
    case PreferMore = 'prefer_more';
}
