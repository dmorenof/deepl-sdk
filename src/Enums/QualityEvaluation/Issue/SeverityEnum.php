<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\QualityEvaluation\Issue;

enum SeverityEnum: string
{
    case Critical = 'Critical';
    case Major = 'Major';
    case Minor = 'Minor';
}
