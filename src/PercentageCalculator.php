<?php

/**
 * Class PercentageCalculator
 *
 * Performs percentage calculations including percentage calculation, increase/decrease of values by a percentage, etc.
 *
 * @category   Mathematics
 * @package    PercentageCalculator
 * @author     Ramazan Çetinkaya <ramazancetinkayadev@outlook.com>
 * @license    MIT License (https://opensource.org/licenses/MIT)
 * @version    1.0.0
 * @link       https://github.com/ramazancetinkaya/percentage-calculator
 */

namespace ramazancetinkaya;

class PercentageCalculator {
    /**
     * Calculate percentage of a number.
     *
     * @param float $number The number to calculate the percentage of.
     * @param float $percentage The percentage value.
     * @return float The result of the percentage calculation.
     */
    public function calculatePercentage(float $number, float $percentage): float {
        $this->validateNumber($number);
        $this->validatePercentage($percentage);
        
        return ($number * $percentage) / 100.0;
    }

    /**
     * Calculate the percentage change between two numbers.
     *
     * @param float $originalNumber The original number.
     * @param float $newNumber The new number.
     * @return float The percentage change between the two numbers.
     */
    public function calculatePercentageChange(float $originalNumber, float $newNumber): float {
        $this->validateNumber($originalNumber);
        $this->validateNumber($newNumber);

        if ($originalNumber === 0) {
            throw new InvalidArgumentException("Original number cannot be zero.");
        }

        return (($newNumber - $originalNumber) / abs($originalNumber)) * 100.0;
    }

    /**
     * Increase a number by a percentage.
     *
     * @param float $number The number to increase.
     * @param float $percentage The percentage to increase by.
     * @return float The increased number.
     */
    public function increaseByPercentage(float $number, float $percentage): float {
        $this->validateNumber($number);
        $this->validatePercentage($percentage);

        return $number + ($number * $percentage / 100.0);
    }

    /**
     * Decrease a number by a percentage.
     *
     * @param float $number The number to decrease.
     * @param float $percentage The percentage to decrease by.
     * @return float The decreased number.
     */
    public function decreaseByPercentage(float $number, float $percentage): float {
        $this->validateNumber($number);
        $this->validatePercentage($percentage);

        return $number - ($number * $percentage / 100.0);
    }

    /**
     * Validate the number input.
     *
     * @param float $number The number to validate.
     * @return void
     * @throws InvalidArgumentException When the number is not a valid float.
     */
    private function validateNumber(float $number): void {
        if (!is_numeric($number)) {
            throw new InvalidArgumentException("Invalid number: $number");
        }
    }

    /**
     * Validate the percentage input.
     *
     * @param float $percentage The percentage to validate.
     * @return void
     * @throws InvalidArgumentException When the percentage is not a valid float or not in the range of 0 to 100.
     */
    private function validatePercentage(float $percentage): void {
        if (!is_numeric($percentage) || $percentage < 0 || $percentage > 100) {
            throw new InvalidArgumentException("Invalid percentage: $percentage. Percentage must be between 0 and 100.");
        }
    }
}
