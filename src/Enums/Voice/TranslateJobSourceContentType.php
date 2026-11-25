<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Voice;

enum TranslateJobSourceContentType: string
{
    case Audioflac = 'audio/flac';
    case Audiomp4 = 'audio/mp4';
    case Audiompeg = 'audio/mpeg';
    case Audioogg = 'audio/ogg';
    case Audiowav = 'audio/wav';
    case Audiowebm = 'audio/webm';
}
