<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum ByInfinitiveEnum: string
{
    case MakeFrenchWordLaisserAgreeWithDirectObjectComplementIfItAppearsBeforeVerb = 'make_french_word_laisser_agree_with_direct_object_complement_if_it_appears_before_verb';
    case UseInvariableFormFrenchWordLaisse = 'use_invariable_form_french_word_laissé';
}
