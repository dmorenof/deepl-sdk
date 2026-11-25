<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Voice;

enum Formality: string
{
    case Default_ = 'default';
    case Formal = 'formal';
    case Informal = 'informal';
    case Less = 'less';
    case More = 'more';
}
