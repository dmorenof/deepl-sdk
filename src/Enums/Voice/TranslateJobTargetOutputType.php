<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Voice;

enum TranslateJobTargetOutputType: string
{
    case ApplicationxSubrip = 'application/x-subrip';
    case Audioflac = 'audio/flac';
    case Audiooggcodecsflac = 'audio/ogg;codecs=flac';
    case Audiooggcodecsopus = 'audio/ogg;codecs=opus';
    case Audioopus = 'audio/opus';
    case Audiopcmencodingalawrate8000 = 'audio/pcm;encoding=alaw;rate=8000';
    case Audiopcmencodings16lerate16000 = 'audio/pcm;encoding=s16le;rate=16000';
    case Audiopcmencodings16lerate24000 = 'audio/pcm;encoding=s16le;rate=24000';
    case Audiopcmencodingulawrate8000 = 'audio/pcm;encoding=ulaw;rate=8000';
    case Audiowebmcodecsopus = 'audio/webm;codecs=opus';
    case AudioxMatroskacodecsaac = 'audio/x-matroska;codecs=aac';
    case AudioxMatroskacodecsflac = 'audio/x-matroska;codecs=flac';
    case AudioxMatroskacodecsopus = 'audio/x-matroska;codecs=opus';
    case AudioxMatroskacodecspcmS16lerate16000 = 'audio/x-matroska;codecs=pcm_s16le;rate=16000';
    case AudioxMatroskacodecspcmS16lerate24000 = 'audio/x-matroska;codecs=pcm_s16le;rate=24000';
    case Textplain = 'text/plain';
    case Videomp2tcodecsaac = 'video/mp2t;codecs=aac';
    case Videomp2tcodecsopus = 'video/mp2t;codecs=opus';
}
