<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Voice;

enum MessageFormat: string
{
    case Json = 'json';
    case Msgpack = 'msgpack';
}
