<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V3\StyleRules;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public \DeepLSDK\Collections\V3\StyleRules\Get\StyleRulesCollection $style_rules;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'style_rules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->style_rules = new \DeepLSDK\Collections\V3\StyleRules\Get\StyleRulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \DeepLSDK\DTOs\Style\RuleList::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
