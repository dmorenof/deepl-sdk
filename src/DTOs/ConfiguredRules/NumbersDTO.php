<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class NumbersDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Formatting options for Approximate Numbers
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\ApproximateNumbersEnum $approximate_numbers;
    /**
     * Formatting options for Currency Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\CurrencyFormatEnum $currency_format;
    /**
     * Formatting options for Decimal Numbers Less Than One
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\LessThanEnum $decimal_numbers_less_than_one;
    /**
     * Formatting options for Decimal Separator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\DecimalSeparatorEnum $decimal_separator;
    /**
     * Formatting options for Dimensions Separator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\DimensionsSeparatorEnum $dimensions_separator;
    /**
     * Formatting options for Equation Formula Reference
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\FormulaReferenceEnum $equation_formula_reference;
    /**
     * Formatting options for Kanji Numbers
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\KanjiNumbersEnum $kanji_numbers;
    /**
     * Formatting options for Large Number Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\NumberFormatEnum $large_number_format;
    /**
     * Formatting options for Large Sums Of Money
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\SumsMoneyEnum $large_sums_of_money;
    /**
     * Formatting options for Large Sums Of Money Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\MoneyFormatEnum $large_sums_of_money_format;
    /**
     * Formatting options for List Of Measurements With Units
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\WithUnitsEnum $list_of_measurements_with_units;
    /**
     * Formatting options for Mathematical Expression Spacing
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\ExpressionSpacingEnum $mathematical_expression_spacing;
    /**
     * Formatting options for Number Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\NumberFormat\NumberFormatEnum $number_format;
    /**
     * Formatting options for Number Separator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\NumberSeparatorEnum $number_separator;
    /**
     * Formatting options for Numbers Of 5 Digits Or More
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\OrMoreEnum $numbers_of_5_digits_or_more;
    /**
     * Formatting options for Numbers Up To 4 Digits
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\Value4DigitsEnum $numbers_up_to_4_digits;
    /**
     * Formatting options for Percentage Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\PercentageFormatEnum $percentage_format;
    /**
     * Formatting options for Reference To Symbol
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\ToSymbolEnum $reference_to_symbol;
    /**
     * Formatting options for Spelling Out Units
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\OutUnitsEnum $spelling_out_units;
    /**
     * Formatting options for Temperature Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\TemperatureFormatEnum $temperature_format;
    /**
     * Formatting options for Thousands Separator
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\ThousandsSeparatorEnum $thousands_separator;
    /**
     * Formatting options for Units Of Measure Spacing
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\MeasureSpacingEnum $units_of_measure_spacing;
    /**
     * Formatting options for Use Of Hiragana And Kanji
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\AndKanjiEnum $use_of_hiragana_and_kanji;
    /**
     * Formatting options for Writing Numbers
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\WritingNumbersEnum $writing_numbers;
    /**
     * Formatting options for Zero Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\Numbers\ZeroFormatEnum $zero_format;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'approximate_numbers' => is_string($value) ? $this->approximate_numbers = \DeepLSDK\Enums\ConfiguredRules\Numbers\ApproximateNumbersEnum::from($value) : parent::assignMember($name, $value),
            'currency_format' => is_string($value) ? $this->currency_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\CurrencyFormatEnum::from($value) : parent::assignMember($name, $value),
            'decimal_numbers_less_than_one' => is_string($value) ? $this->decimal_numbers_less_than_one = \DeepLSDK\Enums\ConfiguredRules\Numbers\LessThanEnum::from($value) : parent::assignMember($name, $value),
            'decimal_separator' => is_string($value) ? $this->decimal_separator = \DeepLSDK\Enums\ConfiguredRules\Numbers\DecimalSeparatorEnum::from($value) : parent::assignMember($name, $value),
            'dimensions_separator' => is_string($value) ? $this->dimensions_separator = \DeepLSDK\Enums\ConfiguredRules\Numbers\DimensionsSeparatorEnum::from($value) : parent::assignMember($name, $value),
            'equation_formula_reference' => is_string($value) ? $this->equation_formula_reference = \DeepLSDK\Enums\ConfiguredRules\Numbers\FormulaReferenceEnum::from($value) : parent::assignMember($name, $value),
            'kanji_numbers' => is_string($value) ? $this->kanji_numbers = \DeepLSDK\Enums\ConfiguredRules\Numbers\KanjiNumbersEnum::from($value) : parent::assignMember($name, $value),
            'large_number_format' => is_string($value) ? $this->large_number_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\NumberFormatEnum::from($value) : parent::assignMember($name, $value),
            'large_sums_of_money' => is_string($value) ? $this->large_sums_of_money = \DeepLSDK\Enums\ConfiguredRules\Numbers\SumsMoneyEnum::from($value) : parent::assignMember($name, $value),
            'large_sums_of_money_format' => is_string($value) ? $this->large_sums_of_money_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\MoneyFormatEnum::from($value) : parent::assignMember($name, $value),
            'list_of_measurements_with_units' => is_string($value) ? $this->list_of_measurements_with_units = \DeepLSDK\Enums\ConfiguredRules\Numbers\WithUnitsEnum::from($value) : parent::assignMember($name, $value),
            'mathematical_expression_spacing' => is_string($value) ? $this->mathematical_expression_spacing = \DeepLSDK\Enums\ConfiguredRules\Numbers\ExpressionSpacingEnum::from($value) : parent::assignMember($name, $value),
            'number_format' => is_string($value) ? $this->number_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\NumberFormat\NumberFormatEnum::from($value) : parent::assignMember($name, $value),
            'number_separator' => is_string($value) ? $this->number_separator = \DeepLSDK\Enums\ConfiguredRules\Numbers\NumberSeparatorEnum::from($value) : parent::assignMember($name, $value),
            'numbers_of_5_digits_or_more' => is_string($value) ? $this->numbers_of_5_digits_or_more = \DeepLSDK\Enums\ConfiguredRules\Numbers\OrMoreEnum::from($value) : parent::assignMember($name, $value),
            'numbers_up_to_4_digits' => is_string($value) ? $this->numbers_up_to_4_digits = \DeepLSDK\Enums\ConfiguredRules\Numbers\Value4DigitsEnum::from($value) : parent::assignMember($name, $value),
            'percentage_format' => is_string($value) ? $this->percentage_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\PercentageFormatEnum::from($value) : parent::assignMember($name, $value),
            'reference_to_symbol' => is_string($value) ? $this->reference_to_symbol = \DeepLSDK\Enums\ConfiguredRules\Numbers\ToSymbolEnum::from($value) : parent::assignMember($name, $value),
            'spelling_out_units' => is_string($value) ? $this->spelling_out_units = \DeepLSDK\Enums\ConfiguredRules\Numbers\OutUnitsEnum::from($value) : parent::assignMember($name, $value),
            'temperature_format' => is_string($value) ? $this->temperature_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\TemperatureFormatEnum::from($value) : parent::assignMember($name, $value),
            'thousands_separator' => is_string($value) ? $this->thousands_separator = \DeepLSDK\Enums\ConfiguredRules\Numbers\ThousandsSeparatorEnum::from($value) : parent::assignMember($name, $value),
            'units_of_measure_spacing' => is_string($value) ? $this->units_of_measure_spacing = \DeepLSDK\Enums\ConfiguredRules\Numbers\MeasureSpacingEnum::from($value) : parent::assignMember($name, $value),
            'use_of_hiragana_and_kanji' => is_string($value) ? $this->use_of_hiragana_and_kanji = \DeepLSDK\Enums\ConfiguredRules\Numbers\AndKanjiEnum::from($value) : parent::assignMember($name, $value),
            'writing_numbers' => is_string($value) ? $this->writing_numbers = \DeepLSDK\Enums\ConfiguredRules\Numbers\WritingNumbersEnum::from($value) : parent::assignMember($name, $value),
            'zero_format' => is_string($value) ? $this->zero_format = \DeepLSDK\Enums\ConfiguredRules\Numbers\ZeroFormatEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
