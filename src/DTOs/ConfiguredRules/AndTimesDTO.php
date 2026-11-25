<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\ConfiguredRules;

final class AndTimesDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Formatting options for Calendar Era
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\CalendarEraEnum $calendar_era;
    /**
     * Formatting options for Centuries
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\CenturiesEnum $centuries;
    /**
     * Formatting options for Date Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\DateFormatEnum $date_format;
    /**
     * Formatting options for Dates In Numerical Form
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\NumericalFormEnum $dates_in_numerical_form;
    /**
     * Formatting options for Decades
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\DecadesEnum $decades;
    /**
     * Formatting options for Hours Minutes Seconds Separator
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\SecondsSeparatorEnum $hours_minutes_seconds_separator;
    /**
     * Formatting options for Hours Minutes Separator
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\MinutesSeparatorEnum $hours_minutes_separator;
    /**
     * Formatting options for Midnight In Numerals
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\InNumeralsEnum $midnight_in_numerals;
    /**
     * Formatting options for Single Digit Days And Months
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\AndMonthsEnum $single_digit_days_and_months;
    /**
     * Formatting options for Single Digit Hours
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\DigitHoursEnum $single_digit_hours;
    /**
     * Formatting options for Time Format
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\TimeFormatEnum $time_format;
    /**
     * Formatting options for Writing Dates
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\WritingDatesEnum $writing_dates;
    /**
     * Formatting options for Years
     */
    public \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\YearsEnum $years;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'calendar_era' => is_string($value) ? $this->calendar_era = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\CalendarEraEnum::from($value) : parent::assignMember($name, $value),
            'centuries' => is_string($value) ? $this->centuries = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\CenturiesEnum::from($value) : parent::assignMember($name, $value),
            'date_format' => is_string($value) ? $this->date_format = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\DateFormatEnum::from($value) : parent::assignMember($name, $value),
            'dates_in_numerical_form' => is_string($value) ? $this->dates_in_numerical_form = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\NumericalFormEnum::from($value) : parent::assignMember($name, $value),
            'decades' => is_string($value) ? $this->decades = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\DecadesEnum::from($value) : parent::assignMember($name, $value),
            'hours_minutes_seconds_separator' => is_string($value) ? $this->hours_minutes_seconds_separator = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\SecondsSeparatorEnum::from($value) : parent::assignMember($name, $value),
            'hours_minutes_separator' => is_string($value) ? $this->hours_minutes_separator = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\MinutesSeparatorEnum::from($value) : parent::assignMember($name, $value),
            'midnight_in_numerals' => is_string($value) ? $this->midnight_in_numerals = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\InNumeralsEnum::from($value) : parent::assignMember($name, $value),
            'single_digit_days_and_months' => is_string($value) ? $this->single_digit_days_and_months = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\AndMonthsEnum::from($value) : parent::assignMember($name, $value),
            'single_digit_hours' => is_string($value) ? $this->single_digit_hours = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\DigitHoursEnum::from($value) : parent::assignMember($name, $value),
            'time_format' => is_string($value) ? $this->time_format = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\TimeFormatEnum::from($value) : parent::assignMember($name, $value),
            'writing_dates' => is_string($value) ? $this->writing_dates = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\WritingDatesEnum::from($value) : parent::assignMember($name, $value),
            'years' => is_string($value) ? $this->years = \DeepLSDK\Enums\ConfiguredRules\DatesAndTimes\YearsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
