<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\GlossaryLanguagePairs;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The list of supported languages
     */
    public \DeepLSDK\Collections\V2\GlossaryLanguagePairs\Get\SupportedLanguagesCollection $supported_languages;

}
