<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum AndEterEnum: string
{
    case TranscribeOpenESoundByDoublingNextConsonant = 'transcribe_open_e_sound_by_doubling_next_consonant';
    case TranscribeOpenESoundWithGraveAccent = 'transcribe_open_e_sound_with_grave_accent';
}
