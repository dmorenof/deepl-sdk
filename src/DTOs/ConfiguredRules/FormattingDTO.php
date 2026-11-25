<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class FormattingDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Formatting options for Email Address Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Formatting\AddressFormatEnum $email_address_format;
    /**
     * Formatting options for Phone Number Country Code Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Formatting\CodeFormatEnum $phone_number_country_code_format;
    /**
     * Formatting options for Phone Number Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Formatting\NumberFormatEnum $phone_number_format;
    /**
     * Formatting options for Space Between Arabic Numerals And Unit
     */
    public \DeepLSDK\Enums\ConfiguredRules\Formatting\AndUnitEnum $space_between_arabic_numerals_and_unit;
    /**
     * Formatting options for Space Between Chinese And English
     */
    public \DeepLSDK\Enums\ConfiguredRules\Formatting\AndEnglishEnum $space_between_chinese_and_english;
    /**
     * Formatting options for Space Between Chinese Characters And Arabic Numerals
     */
    public \DeepLSDK\Enums\ConfiguredRules\Formatting\ArabicNumeralsEnum $space_between_chinese_characters_and_arabic_numerals;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email_address_format' => is_string($value) ? $this->email_address_format = \DeepLSDK\Enums\ConfiguredRules\Formatting\AddressFormatEnum::from($value) : parent::assignMember($name, $value),
            'phone_number_country_code_format' => is_string($value) ? $this->phone_number_country_code_format = \DeepLSDK\Enums\ConfiguredRules\Formatting\CodeFormatEnum::from($value) : parent::assignMember($name, $value),
            'phone_number_format' => is_string($value) ? $this->phone_number_format = \DeepLSDK\Enums\ConfiguredRules\Formatting\NumberFormatEnum::from($value) : parent::assignMember($name, $value),
            'space_between_arabic_numerals_and_unit' => is_string($value) ? $this->space_between_arabic_numerals_and_unit = \DeepLSDK\Enums\ConfiguredRules\Formatting\AndUnitEnum::from($value) : parent::assignMember($name, $value),
            'space_between_chinese_and_english' => is_string($value) ? $this->space_between_chinese_and_english = \DeepLSDK\Enums\ConfiguredRules\Formatting\AndEnglishEnum::from($value) : parent::assignMember($name, $value),
            'space_between_chinese_characters_and_arabic_numerals' => is_string($value) ? $this->space_between_chinese_characters_and_arabic_numerals = \DeepLSDK\Enums\ConfiguredRules\Formatting\ArabicNumeralsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
