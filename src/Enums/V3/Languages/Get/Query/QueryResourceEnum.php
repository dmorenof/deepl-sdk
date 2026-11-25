<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\V3\Languages\Get\Query;

enum QueryResourceEnum: string
{
    case Glossary = 'glossary';
    case StyleRules = 'style_rules';
    case TranslateDocument = 'translate_document';
    case TranslateText = 'translate_text';
    case TranslationMemory = 'translation_memory';
    case Voice = 'voice';
    case Write = 'write';
}
