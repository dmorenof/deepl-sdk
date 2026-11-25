<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\SpellingAndGrammar;

enum PassiveVoiceEnum: string
{
    case UseActiveVoiceIfSubjectIsProminentAndAgentIsClear = 'use_active_voice_if_subject_is_prominent_and_agent_is_clear';
    case UseActiveVoiceToDescribeOperationsWithUserAsSubject = 'use_active_voice_to_describe_operations_with_user_as_subject';
    case UseActiveVoiceUnlessAgentIsUnknownOrIrrelevant = 'use_active_voice_unless_agent_is_unknown_or_irrelevant';
    case UsePassiveVoiceAsNeeded = 'use_passive_voice_as_needed';
    case UsePassiveVoiceForAutomaticOperationsFromUserPerspective = 'use_passive_voice_for_automatic_operations_from_user_perspective';
    case UsePassiveVoiceIfAgentIsUnknownOrIrrelevant = 'use_passive_voice_if_agent_is_unknown_or_irrelevant';
}
