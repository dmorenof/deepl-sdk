<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\StyleProfiles;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\Collections\V3\StyleProfiles\Get\StyleProfilesCollection $style_profiles;
    /**
     * The total number of style profiles available to the account.
     * Example: 2
     */
    public int $total_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'style_profiles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->style_profiles = new \DeepLSDK\Collections\V3\StyleProfiles\Get\StyleProfilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Style\Profile::class)) : parent::assignMember($name, $value),
            'total_count' => is_int($value) ? $this->total_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
