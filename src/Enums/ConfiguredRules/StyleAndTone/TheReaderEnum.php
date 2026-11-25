<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum TheReaderEnum: string
{
    case UseFormalFrenchWordVous = 'use_formal_french_word_vous';
    case UseFormalItalianWordLei = 'use_formal_italian_word_lei';
    case UseInformalFrenchWordTu = 'use_informal_french_word_tu';
    case UseInformalItalianWordTu = 'use_informal_italian_word_tu';
}
