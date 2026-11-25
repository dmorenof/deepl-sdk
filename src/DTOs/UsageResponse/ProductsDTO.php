<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\UsageResponse;

final class ProductsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Total units used for this product in the current period.
     * Example: 5643
     */
    public int $account_unit_count;
    /**
     * Use api_key_unit_count instead. Characters used for this product by this API key in the current period."
     * Example: 0
     *
     * @deprecated
     */
    public int $api_key_character_count;
    /**
     * Units used for this product by this API key in the current period.
     * Example: 0
     */
    public int $api_key_unit_count;
    /**
     * The billing unit for this product type.
     * Example: "characters"
     */
    public \DeepLSDK\Enums\UsageResponse\ProductsItem\BillingUnitEnum $billing_unit;
    /**
     * Use account_unit_count instead. Total characters used for this product in the current period."
     * Example: 5643
     *
     * @deprecated
     */
    public int $character_count;
    /**
     * The type of product (e.g., 'write', 'translate').
     * Example: "write"
     */
    public string $product_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_unit_count' => is_int($value) ? $this->account_unit_count = $value : parent::assignMember($name, $value),
            'api_key_character_count' => is_int($value) ? $this->api_key_character_count = $value : parent::assignMember($name, $value),
            'api_key_unit_count' => is_int($value) ? $this->api_key_unit_count = $value : parent::assignMember($name, $value),
            'billing_unit' => is_string($value) ? $this->billing_unit = \DeepLSDK\Enums\UsageResponse\ProductsItem\BillingUnitEnum::from($value) : parent::assignMember($name, $value),
            'character_count' => is_int($value) ? $this->character_count = $value : parent::assignMember($name, $value),
            'product_type' => is_string($value) ? $this->product_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
