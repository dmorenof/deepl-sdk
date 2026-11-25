<?php

declare(strict_types=1);

namespace DeepLSDK\Enums;

enum ModelType: string
{
    case LatencyOptimized = 'latency_optimized';
    case PreferQualityOptimized = 'prefer_quality_optimized';
    case QualityOptimized = 'quality_optimized';
}
