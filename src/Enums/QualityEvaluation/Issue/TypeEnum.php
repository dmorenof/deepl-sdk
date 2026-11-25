<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\QualityEvaluation\Issue;

enum TypeEnum: string
{
    case Accuracy = 'Accuracy';
    case Fluency = 'Fluency';
    case InternalTQEError = 'InternalTQEError';
    case Miscellaneous = 'Miscellaneous';
    case Style = 'Style';
}
