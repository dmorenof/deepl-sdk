<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V2\Write\Correct;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'improvements' => [
        'minItems' => 1,
    ],
];

    public \DeepLSDK\Collections\V2\Write\Correct\Post\CorrectImprovementsCollection $improvements {
        set {
            $this->assigning('improvements', $value);
            $this->improvements = $value;
        }
    }

}
