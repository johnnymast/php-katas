<?php
declare(strict_types=1);

namespace JM\PHPKata;

class StringCalculator
{
    public function add(string $numbers, array $delimiters = ["@", "*", "%",";", "\n", ","], array $parsed = [], int $sum = 0): int
    {
        if (! empty($numbers)) {

            if (is_numeric($numbers) > 0) {
                $numbers = trim($numbers, implode('', $delimiters));
                $sum = intval($numbers);

                if ($sum < 0) {
                    throw new \InvalidArgumentException("negatives not allowed");
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
