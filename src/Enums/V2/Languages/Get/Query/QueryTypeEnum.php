<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V2\Languages\Get\Query;

enum QueryTypeEnum: string
{
    case Source = 'source';
    case Target = 'target';
}
