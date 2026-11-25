<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\StyleAndTone;

enum InstructionsStyleEnum: string
{
    case UseImperative = 'use_imperative';
    case UseIndicative = 'use_indicative';
    case UseInfinitive = 'use_infinitive';
    case UseModalVerbs = 'use_modal_verbs';
    case UsePassiveVoice = 'use_passive_voice';
}
