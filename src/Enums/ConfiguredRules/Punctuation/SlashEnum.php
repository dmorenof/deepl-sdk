<?php

declare(strict_types=1);

namespace DeepLSDK\Enums\ConfiguredRules\Punctuation;

enum SlashEnum: string
{
    case DoNotUseSpacesBeforeAndAfterSlashes = 'do_not_use_spaces_before_and_after_slashes';
    case UseSpacesBeforeAndAfterSlashes = 'use_spaces_before_and_after_slashes';
    case UseSpacesBeforeAndAfterSlashesIfThereAreMultipleWordsBeforeAndAfterSlash = 'use_spaces_before_and_after_slashes_if_there_are_multiple_words_before_and_after_slash';
    case UseSpacesBeforeAndAfterSlashesIfThereAreMultipleWordsBeforeOrAfterSlash = 'use_spaces_before_and_after_slashes_if_there_are_multiple_words_before_or_after_slash';
}
