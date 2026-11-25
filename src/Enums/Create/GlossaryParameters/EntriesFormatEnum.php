<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\Create\GlossaryParameters;

enum EntriesFormatEnum: string
{
    case Csv = 'csv';
    case Tsv = 'tsv';
}
