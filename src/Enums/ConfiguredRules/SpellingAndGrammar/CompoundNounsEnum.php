<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum CompoundNounsEnum: string
{
    case WriteAsOneWord = 'write_as_one_word';
    case WriteWithHyphen = 'write_with_hyphen';
}
