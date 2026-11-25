<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\QualityEvaluation\Issue;

enum SubTypeEnum: string
{
    case Addition = 'Addition';
    case Awkward = 'Awkward';
    case CharacterEncoding = 'Character encoding';
    case Grammar = 'Grammar';
    case GrammaticalRegister = 'Grammatical register';
    case Inconsistency = 'Inconsistency';
    case InconsistentStyle = 'Inconsistent style';
    case Mistranslation = 'Mistranslation';
    case Omission = 'Omission';
    case OverTranslation = 'Over-translation';
    case Punctuation = 'Punctuation';
    case SegmentTooLarge = 'SegmentTooLarge';
    case Spelling = 'Spelling';
    case UnderTranslation = 'Under-translation';
    case UntranslatedText = 'Untranslated text';
}
