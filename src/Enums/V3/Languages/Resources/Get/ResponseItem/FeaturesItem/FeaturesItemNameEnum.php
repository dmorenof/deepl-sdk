<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V3\Languages\Resources\Get\ResponseItem\FeaturesItem;

enum FeaturesItemNameEnum: string
{
    case AutoDetection = 'auto_detection';
    case Formality = 'formality';
    case Glossary = 'glossary';
    case SpokenTerms = 'spoken_terms';
    case StyleRules = 'style_rules';
    case TagHandling = 'tag_handling';
    case Tone = 'tone';
    case Transcription = 'transcription';
    case TranslatedSpeech = 'translated_speech';
    case TranslationMemory = 'translation_memory';
    case WritingStyle = 'writing_style';
}
