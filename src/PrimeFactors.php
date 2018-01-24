<?php

namespace JM\PHPKata;

/**
 * PrimeFactors class with help of Jeffrey Way
 */
class PrimeFactors
{
    /**
     * Generate prime factors for numbers
     *
     * @param integer $number Find prime factors for this number
     * @return void
     */
    public function generatate(int $number = 0)
    {
        $remaining = $number;
        $primes = [];

        for ($candidate = 2; $remaining > 1; $candidate++) {
            for (;$remaining % $candidate == 0; $remaining /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }
}
