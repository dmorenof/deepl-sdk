<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\Glossaries;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\Collections\V3\Glossaries\Get\GlossariesGlossariesCollection $glossaries;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'glossaries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->glossaries = new \DeepLSDK\Collections\V3\Glossaries\Get\GlossariesGlossariesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\MultilingualGlossary::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
