<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Write\Rephrase;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'improvements' => [
            'minItems' => 1,
        ],
    ];

    public \DeepLSDK\Collections\V2\Write\Rephrase\Post\RephraseImprovementsCollection $improvements {
        set {
            $this->assigning('improvements', $value);
            $this->improvements = $value;
        }
    }
}
