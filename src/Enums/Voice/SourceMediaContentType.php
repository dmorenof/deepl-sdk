<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Voice;

enum SourceMediaContentType: string
{
    case Audioauto = 'audio/auto';
    case Audioflac = 'audio/flac';
    case Audiompeg = 'audio/mpeg';
    case Audioogg = 'audio/ogg';
    case Audiooggcodecsflac = 'audio/ogg;codecs=flac';
    case Audiooggcodecsopus = 'audio/ogg;codecs=opus';
    case Audiopcmencodingalawrate8000 = 'audio/pcm;encoding=alaw;rate=8000';
    case Audiopcmencodings16lerate16000 = 'audio/pcm;encoding=s16le;rate=16000';
    case Audiopcmencodings16lerate44100 = 'audio/pcm;encoding=s16le;rate=44100';
    case Audiopcmencodings16lerate48000 = 'audio/pcm;encoding=s16le;rate=48000';
    case Audiopcmencodings16lerate8000 = 'audio/pcm;encoding=s16le;rate=8000';
    case Audiopcmencodingulawrate8000 = 'audio/pcm;encoding=ulaw;rate=8000';
    case Audiowebm = 'audio/webm';
    case Audiowebmcodecsopus = 'audio/webm;codecs=opus';
    case AudioxMatroska = 'audio/x-matroska';
    case AudioxMatroskacodecsaac = 'audio/x-matroska;codecs=aac';
    case AudioxMatroskacodecsflac = 'audio/x-matroska;codecs=flac';
    case AudioxMatroskacodecsmp3 = 'audio/x-matroska;codecs=mp3';
    case AudioxMatroskacodecsopus = 'audio/x-matroska;codecs=opus';
}
