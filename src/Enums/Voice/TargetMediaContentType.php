<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Voice;

enum TargetMediaContentType: string
{
    case Audioflac = 'audio/flac';
    case Audioogg = 'audio/ogg';
    case Audiooggcodecsflac = 'audio/ogg;codecs=flac';
    case Audiooggcodecsopus = 'audio/ogg;codecs=opus';
    case Audioopus = 'audio/opus';
    case Audiopcmencodingalawrate8000 = 'audio/pcm;encoding=alaw;rate=8000';
    case Audiopcmencodings16lerate16000 = 'audio/pcm;encoding=s16le;rate=16000';
    case Audiopcmencodings16lerate24000 = 'audio/pcm;encoding=s16le;rate=24000';
    case Audiopcmencodingulawrate8000 = 'audio/pcm;encoding=ulaw;rate=8000';
    case Audiowebm = 'audio/webm';
    case Audiowebmcodecsopus = 'audio/webm;codecs=opus';
    case AudioxMatroskacodecsaac = 'audio/x-matroska;codecs=aac';
    case AudioxMatroskacodecsflac = 'audio/x-matroska;codecs=flac';
    case AudioxMatroskacodecsopus = 'audio/x-matroska;codecs=opus';
    case Videomp2tcodecsaac = 'video/mp2t;codecs=aac';
    case Videomp2tcodecsopus = 'video/mp2t;codecs=opus';
}
