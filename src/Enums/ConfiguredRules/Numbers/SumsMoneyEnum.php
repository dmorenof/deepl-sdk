<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Numbers;

enum SumsMoneyEnum: string
{
    case SpellOutItalianWordsMilioneAndMiliardo = 'spell_out_italian_words_milione_and_miliardo';
    case UseItalianWordsMioAndMrdInsteadOfItalianWordsMilioneAndMiliardo = 'use_italian_words_mio_and_mrd_instead_of_italian_words_milione_and_miliardo';
}
