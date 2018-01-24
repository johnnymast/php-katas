<?php
declare(strict_types=1);

namespace JM\PHPKata;

/**
 * StringCalculator class
 */
class StringCalculator
{
    /**
     * Translate strings returning the the sum.
     *
     * @param string $numbers
     * @param array $delimiters
     * @param array $parsed
     * @param int $sum
     * @return int
     */
    public function add(string $numbers, array $delimiters = ['@', '*', '%', ';', "\n", ','], array $parsed = [], int $sum = 0)
    {
        if (!empty($numbers)) {
            if (is_numeric($numbers) > 0) {
                $numbers = trim($numbers, implode('', $delimiters));
                $sum = intval($numbers);

                if ($sum < 0) {
                    throw new \InvalidArgumentException('negatives not allowed');
                }

                if ($sum > 1000) {
                    return 0;
                }
            }

            foreach ($delimiters as $delimiter) {
                if (strpos($numbers, $delimiter) > -1) {
                    $parts = explode($delimiter, $numbers);
                    if (is_array($parts) && count($parts) > 0) {
                        $parsed += array_map([$this, 'add'], $parts);
                    }
                }
            }

            $sum += array_sum($parsed);
        }

        return $sum;
    }
}
