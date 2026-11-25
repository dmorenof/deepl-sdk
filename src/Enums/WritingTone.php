<?php

declare(strict_types=1);

namespace DeepLSDK\Enums;

enum WritingTone: string
{
    case Confident = 'confident';
    case Default_ = 'default';
    case Diplomatic = 'diplomatic';
    case Enthusiastic = 'enthusiastic';
    case Friendly = 'friendly';
    case PreferConfident = 'prefer_confident';
    case PreferDiplomatic = 'prefer_diplomatic';
    case PreferEnthusiastic = 'prefer_enthusiastic';
    case PreferFriendly = 'prefer_friendly';
}
