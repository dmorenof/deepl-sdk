<?php

declare(strict_types=1);

namespace DeepLSDK\Enums;

enum WritingStyle: string
{
    case Academic = 'academic';
    case Business = 'business';
    case Casual = 'casual';
    case Default_ = 'default';
    case PreferAcademic = 'prefer_academic';
    case PreferBusiness = 'prefer_business';
    case PreferCasual = 'prefer_casual';
    case PreferSimple = 'prefer_simple';
    case Simple = 'simple';
}
