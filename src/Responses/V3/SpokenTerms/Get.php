<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\SpokenTerms;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\Collections\V3\SpokenTerms\Get\SpokenTermsCollection $spoken_terms;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'spoken_terms' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->spoken_terms = new \DeepLSDK\Collections\V3\SpokenTerms\Get\SpokenTermsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\SpokenTerms::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
