<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Translate;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'translations' => [
            'minItems' => 1,
        ],
    ];

    public \DeepLSDK\Collections\V2\Translate\Post\TranslateTranslationsCollection $translations {
        set {
            $this->assigning('translations', $value);
            $this->translations = $value;
        }
    }
}
